const canvas = document.querySelector('canvas')
const c = canvas.getContext('2d')

canvas.width = innerWidth
canvas.height = innerHeight

const playerScore = document.querySelector('#playerScore')
const startGameButton = document.querySelector('#startGameButton')
const modalGame = document.querySelector('#modalGame')
const modalplayerScore = document.querySelector('#modalplayerScore')
const bigBoomAudio = document.querySelector('#bigBoomAudio')
const shootingAudio = document.querySelector('#shootingAudio')
const bgGameAudio = document.querySelector('#bgGameAudio')

class Player {
    constructor(x, y, radius, color) {
        this.x = x
        this.y = y
        this.radius = radius
        this.color = color
    }

    draw() {
        c.beginPath()
        c.arc(this.x, this.y, this.radius, 0, Math.PI*2, false)
        c.fillStyle = this.color
        c.fill()
    }
}

class Projectile {
    constructor(x, y, radius, color, velocity) {
        this.x = x
        this.y = y
        this.radius = radius
        this.color = color
        this.velocity = velocity
    }

    draw() {
        c.beginPath()
        c.arc(this.x, this.y, this.radius, 0, Math.PI*2, false)
        c.fillStyle = this.color
        c.fill()
    }

    update() {
        this.draw()
        this.x = this.x + this.velocity.x
        this.y = this.y + this.velocity.y
    }
}

class Enemy {
    constructor(x, y, radius, color, velocity, speed) {
        this.x = x
        this.y = y
        this.radius = radius
        this.color = color
        this.velocity = velocity
        this.speed = speed
    }

    draw() {
        c.beginPath()
        c.arc(this.x, this.y, this.radius, 0, Math.PI*2, false)
        c.fillStyle = this.color
        c.fill()
    }

    update() {
        this.draw()
        this.x = this.x + this.velocity.x
        this.y = this.y + this.velocity.y
    }

    updateVelocity(speed){
        this.draw()
        this.velocity.x *= this.speed
        this.velocity.y *= this.speed

    }
}

const friction = 0.99

class Particle {
    constructor(x, y, radius, color, velocity) {
        this.x = x
        this.y = y
        this.radius = radius
        this.color = color
        this.velocity = velocity
        this.alpha = 1
    }

    draw() {
        c.save()
        c.globalAlpha = this.alpha
        c.beginPath()
        c.arc(this.x, this.y, this.radius, 0, Math.PI*2, false)
        c.fillStyle = this.color
        c.fill()
        c.restore()
    }

    update() {
        this.draw()
        this.velocity.x *= friction
        this.velocity.y *= friction
        this.x = this.x + this.velocity.x
        this.y = this.y + this.velocity.y
        this.alpha -= 0.01 
    }
}

const x = canvas.width / 2
const y = canvas.height / 2

let player = new Player(x, y, 10, 'white')
let projectiles = []
let enemies = []
let particles = []

function init(){
    bgGameAudio.play()
    player = new Player(x, y, 10, 'white')
    projectiles = []
    enemies = []
    particles = []
    score = 0
    speedActive = 0.6;
    playerScore.innerHTML = score
    modalplayerScore.innerHTML = score
}

function spawnEnemies() {
    setInterval (() => {
        const min = Math.ceil(8)
        const max = Math.floor(35)
        const radius = Math.floor(Math.random() * (max - min + 1)) + min

        let x
        let y

        if (Math.random() < 0.5) {
            x = Math.random() < 0.5 ? 0 - radius : canvas.width + radius//0 - radius//Math.random() * canvas.width
            y =  Math.random() * canvas.height
        } else {
            x = Math.random() * canvas.width//0 - radius//Math.random() * canvas.width
            y =  Math.random() < 0.5 ? 0 - radius : canvas.height + radius
        }
    
        const color = `hsl(${Math.random() * 360}, 50%, 50%)`
        const angle = Math.atan2(canvas.height/2 - y, canvas.width/2-x)
        const velocity = {
            x: Math.cos(angle),
            y: Math.sin(angle)
        }

        enemies.push(new Enemy(x, y, radius, color, velocity, speedActive))
    }, 5000)
}

let animationId
let score = 0;
let speedActive = 0.6;

function animate() {
    animationId = requestAnimationFrame(animate)

    c.fillStyle = 'rgba(0,0,0,0.1)'
    c.fillRect(0, 0, canvas.width, canvas.height)
    player.draw()

    particles.forEach((particle, index) => {
        if(particle.alpha<=0){
            particles.splice(index, 1)
        } else{
            particle.update()
        }
    })

    projectiles.forEach((projectile, index) => {
        projectile.update()

        //remove from edges of screen
        if (projectile.x + projectile.radius <0 ||
            projectile.x - projectile.radius > canvas.width ||
            projectile.y + projectile.radius <0 ||
            projectile.y - projectile.radius > canvas.height){
            setTimeout(() => {  
                projectiles.splice(index, 1)
            }, 0)
        }
    })

    enemies.forEach((Enemy, index) => {
        Enemy.update()

        const dist = Math.hypot(player.x - Enemy.x, player.y - Enemy.y)

        if (dist - Enemy.radius - player.radius< 1) {
            //end game, jika player disentuh projectile
            cancelAnimationFrame(animationId)
            bgGameAudio.pause();
            bgGameAudio.currentTime = 0;
            bigBoomAudio.pause();
            bigBoomAudio.currentTime = 0;
            shootingAudio.pause();
            shootingAudio.currentTime = 0;
            modalGame.style.display = 'flex'
            modalplayerScore.innerHTML = score
        }

        projectiles.forEach((projectile, projectileIndex) => {
            const dist = Math.hypot(projectile.x - Enemy.x, projectile.y - Enemy.y)

            bigBoomAudio.pause(); //benar?
bigBoomAudio.currentTime = 0;
            //enemy brsntuhn dngn senjata player
            if (dist - Enemy.radius - projectile.radius< 1) {   
                 
                if(modalGame.style.display == 'none'){
                    bigBoomAudio.play();
                }
             
                for(let i =0; i<Enemy.radius*2;i++){
                    particles.push(new Particle(projectile.x, projectile.y, Math.random() *2, Enemy.color, {
                        x: (Math.random() - 0.5) * (Math.random() * 4),
                        y: (Math.random() - 0.5) * (Math.random() * 4)
                    }))
                }

                if(Enemy.radius - 10>5) {
                    //increase score
                    score += 65
                    playerScore.innerHTML = score

                    gsap.to(Enemy, {
                        radius: Enemy.radius - 10
                    })

                    Enemy.updateVelocity(speedActive)
                    
                    setTimeout(() => {  
                        projectiles.splice(projectileIndex, 1)
                    }, 0)
                } else {
                    //remove from screen altogether
                    bigBoomAudio.play();
                    score += 170
                    playerScore.innerHTML = score

                    setTimeout(() => {
                        enemies.splice(index, 1)
                        projectiles.splice(projectileIndex, 1)
                    }, 0)
                }
            }
        })
    })
}

addEventListener('click', (event) => {
    const angle = Math.atan2(event.clientY - canvas.height/2, event.clientX - canvas.width/2)
    const velocity = {
        x: Math.cos(angle) * 9,
        y: Math.sin(angle) * 9
    }

    if(modalGame.style.display == 'none'){
        shootingAudio.play()
    }

    projectiles.push(new Projectile(canvas.width/2, canvas.height/2, 5, 'white', velocity))
})

startGameButton.addEventListener('click', () =>{
    init()
    animate()
    spawnEnemies()
    modalGame.style.display = 'none'
})