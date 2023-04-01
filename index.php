<!DOCTYPE html>
<html>
  <head>
    <title>Countdown timer</title>
    <style>


body {
  font-family: sans-serif;
  height: 100vh;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  background-image: url("https://img4.goodfon.com/wallpaper/nbig/1/2e/multfilm-shou-simpsons-personazh-20th-century-fox-art-ris-15.jpg");
}
#countdown {
  display: flex;
  justify-content: center;
  align-items: center;
  color: #0e2c4c;
  font-size: 70px;
  width: 200px;
  height: 200px;
  background-color: #e7d9fc;
  border-radius: 50%;
}
.action-list {
  display: flex;
  gap: 30px;
  margin-top: 30px;
}
button {
  border: none;
  background-color: #e7d9fc;
  border-radius: 50%;
  width: 60px;
  height: 60px;
  cursor: pointer;
}



    </style>
   
  </head>
  <body>
    <div id="countdown">
      <div id="countdown-number">900</div>
    </div>
    <div class="action-list">
      <button id="stop">
        <img src="https://img.icons8.com/ios-glyphs/30/000000/pause--v1.png" />
      </button>
      <button id="start">
        <img src="https://img.icons8.com/ios-glyphs/30/000000/play--v1.png" />
      </button>
      <button id="reset">
        <img src="https://img.icons8.com/ios-glyphs/30/000000/stop.png" />
      </button>
    </div>
    <audio id="timeout_audio" ></audio>


    <audio style="display:hidden" src="https://meditation-daniel.herokuapp.com/mixkit-magic-marimba-2820.wav" ></audio>
    <audio style="display:hidden" src="https://meditation-daniel.herokuapp.com/mixkit-long-pop-2358.wav" ></audio>
    <audio style="display:hidden" src="https://meditation-daniel.herokuapp.com/mixkit-magic-notification-ring-2344.wav" ></audio>

    <script  defer>


        // Select Countdown container
        const countContainer = document.getElementById("countdown-number");
        
        // Select action buttons
        const startButton = document.getElementById("start");
        const stopButton = document.getElementById("stop");
        const resetButton = document.getElementById("reset");
        
        // Select timeout Audio element
        const timeoutAudio = document.getElementById("timeout_audio");
        
        // variable to store count
        var remainingTime = 900;

        //volume

        timeoutAudio.volume = 0.1;
        
        // variable to store time interval
        var timer;
        
        // Variable to track whether timer is running or not
        var isStopped = true;
        
        // Function to start Timer
        const startTimer = () => {
          if (isStopped) {
            isStopped = false;
            countContainer.innerHTML = remainingTime;
            timer = setInterval(renderTime, 1000);
          }
        };
        
        // Function to stop Timer
        const stopTimer = () => {
          isStopped = true;
          if (timer) {
            clearInterval(timer);
          }
        };
        
        // Function to reset Timer
        const resetTimer = () => {
          isStopped = true;
          clearInterval(timer);
          remainingTime = 900;
          countContainer.innerHTML = remainingTime;
        };
        
        // Initialize timeout sound

        
        // Attach onclick event to buttons
        startButton.onclick = startTimer;
        resetButton.onclick = resetTimer;
        stopButton.onclick = stopTimer;
        
        // function to display time
        const renderTime = () => {
          // decement time
          remainingTime -= 1;
          // render count on the screen
          countContainer.innerHTML = remainingTime;
          

          // body scan
            if (remainingTime === 870) {
           

            document.getElementById("timeout_audio").src = "https://meditation-daniel.herokuapp.com/mixkit-magic-marimba-2820.wav";
            document.getElementById("timeout_audio").load();
            timeoutAudio.play();
          }
          
          // do i accept myself
          if (remainingTime === 780) {
            document.getElementById("timeout_audio").src = "https://meditation-daniel.herokuapp.com/mixkit-long-pop-2358.wav";
            document.getElementById("timeout_audio").load();
            timeoutAudio.play();
          } 
          // Thank
          if (remainingTime === 690) {
            document.getElementById("timeout_audio").src = "https://meditation-daniel.herokuapp.com/mixkit-long-pop-2358.wav";
            document.getElementById("timeout_audio").load();
            timeoutAudio.play();
          }    
          // Imagine
          if (remainingTime === 630) {
            document.getElementById("timeout_audio").src = "https://meditation-daniel.herokuapp.com/mixkit-long-pop-2358.wav";
            document.getElementById("timeout_audio").load();
            timeoutAudio.play();
          }   
          // Breath
          if (remainingTime === 570) {
            document.getElementById("timeout_audio").src = "https://meditation-daniel.herokuapp.com/mixkit-magic-notification-ring-2344.wav";
            document.getElementById("timeout_audio").load();
            timeoutAudio.play();
          }                               
          // Free mind
          if (remainingTime === 180) {
            document.getElementById("timeout_audio").src = "https://meditation-daniel.herokuapp.com/mixkit-magic-notification-ring-2344.wav";
            document.getElementById("timeout_audio").load();
            timeoutAudio.play();
          } 
          // Free mind
          if (remainingTime === 30) {
            document.getElementById("timeout_audio").src = "https://meditation-daniel.herokuapp.com/mixkit-magic-notification-ring-2344.wav";
            document.getElementById("timeout_audio").load();
            timeoutAudio.play();
          }                       
          
          // timeout on zero
          if (remainingTime === 0) {
            isStopped = true;
            clearInterval(timer);
            // Play audio on timeout
            document.getElementById("timeout_audio").src = "http://soundbible.com/grab.php?id=1252&type=mp3";
            document.getElementById("timeout_audio").load();
            timeoutAudio.play();
            remainingTime = 900;
          }
        };
            </script>
  </body>
</html>