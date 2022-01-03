<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8" />
      <title>HTML Canvas</title>

      <style>
          body {
              margin: 0;
          }
      </style>
   </head>
   <body>
     
      <div class="fixed"><span id="playerScore">Skor: </span></div>
      <div id="modalGame">
          <div>
          <p>Kamu mendapatkan</p>
              <h1 id="modalplayerScore">0</h1>
              <p>Skor</p>
              <p>Skor tertinggi kamu: 0000</p>
              <div>
                  <button id="startGameButton">Mulai Bermain</button>
              </div>
          </div>
      </div>
      <canvas id="canvas"></canvas>
      <audio src="audios/bgGameAudio.mp3" id="bgGameAudio" autoplay loop="true"></audio>
      <audio src="audios/BigBoom.mp3" id="bigBoomAudio"></audio>
      <audio src="audios/Shooting.mp3" id="shootingAudio"></audio>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js" integrity="sha512-H6cPm97FAsgIKmlBA4s774vqoN24V5gSQL4yBTDOY2su2DeXZVhQPxFK4P6GPdnZqM9fg1G3cMv5wD7e6cFLZQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script src="{{asset('/js/game.js')}}"></script>
      
   </body>
</html>