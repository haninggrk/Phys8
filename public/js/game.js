
const canvas = document.querySelector('canvas')
const c = canvas.getContext('2d')

canvas.width = innerWidth
canvas.height = innerHeight

const playerScore = document.querySelector('#playerScore')
const startGameButton = document.querySelector('#startGameButton')
const modalGame = document.querySelector('#modalGame')
const modalplayerScore = document.querySelector('#modalplayerScore')

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

//const projectile = new Projectile(
  //  canvas.width/2, canvas.height/2, 5, 'red', 
    //{
      //  x: 1,
        //y:1
    //}
//)

//const projectile2 = new Projectile(
  //  canvas.width/2, canvas.height/2, 5, 'green', 
   // {
     //   x: -1,
       // y: -1
    //}
//)
let player = new Player(x, y, 10, 'white')
let projectiles = []
let enemies = []
let particles = []

function init(){
    player = new Player(x, y, 10, 'white')
    projectiles = []
    enemies = []
    particles = []
    score = 0
    playerScore.innerHTML = score
    modalplayerScore.innerHTML = score
}

function spawnEnemies() {
    setInterval (() => {
        const radius = Math.random() * (30-4) + 4
        //0-radius biar dia nyentuh titik player


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
       

        const angle = Math.atan2(canvas.height/2 - y,
            canvas.width/2-x)
        
        const velocity = {
            x: Math.cos(angle),
            y: Math.sin(angle)
        }

      enemies.push(new Enemy(x, y, radius, color, velocity))
    }, 1000)
}

let animationId
let score = 0;
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
        if(projectile.x + projectile.radius <0 ||
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
        modalGame.style.display = 'flex'
        modalplayerScore.innerHTML = score
        }

        projectiles.forEach((projectile, projectileIndex) => {
            const dist = Math.hypot(projectile.x - Enemy.x, projectile.y - Enemy.y)

            //enemy brsntuhn dngn senjata player
            if (dist - Enemy.radius - projectile.radius< 1) {
                
                
              
                
                for(let i =0; i<Enemy.radius*2;i++){
                    particles.push(new Particle(projectile.x, projectile.y, Math.random() *2, Enemy.color, {
                        x: (Math.random() - 0.5) * (Math.random() * 4),
                        y: (Math.random() - 0.5) * (Math.random() * 4)
                    }))
                }

                if(Enemy.radius - 10>5) {

                      //increase score
                score += 100
                playerScore.innerHTML = score

                    gsap.to(Enemy, {
                        radius: Enemy.radius - 10
                    })
                    setTimeout(() => {
                      
                        projectiles.splice(projectileIndex, 1)
                    }, 0)
                } else {

                    //remove from screen altogether
                score += 250
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
    const angle = Math.atan2(event.clientY - canvas.height/2,
        event.clientX - canvas.width/2)
    
    const velocity = {
        x: Math.cos(angle) * 6,
        y: Math.sin(angle) * 6
    }

    projectiles.push(new Projectile(canvas.width/2, canvas.height/2, 5, 'white', velocity))

    projectile.draw()
})

startGameButton.addEventListener('click', () =>{
    init()
    animate()
    spawnEnemies()
    modalGame.style.display = 'none'
})