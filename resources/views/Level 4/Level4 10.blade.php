<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>4 - 1</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style_narasi.css">

</head>
<body style="display: flex; background-image: url('images/level4.png'); background-image: url(/images/level4.png);">

<div id="cutscene1" class="cutscene-overlay" onclick="hideCutscene()" style="background-color: rgba(10, 10, 10, 0.95);">
  <img src="images/enpisi_yes.png" alt="Notification Image" id="notif-image"></img>
    <div class="overlay-text">
    <h6>Utopia</h6>  
    Kau paham cara memanggil fungsi, hebat!</div>
  </div>
<div id="cutscene2" class="cutscene-overlay" onclick="hideCutscene()" style="background-color: rgba(10, 10, 10, 0.95);">
  <img src="images/soal4.png" alt="Notification Image"></img>
  </div>
<div id="cutscene3" class="cutscene-overlay" onclick="hideCutscene()" style="background-color: rgba(10, 10, 10, 0.95);">
  <img src="images/soal4 done.png" alt="Notification Image"></img>
  </div>

  <div class="menu-container">
    <div class="menu-form">
      <h1 style="color: rgb(189, 43, 226); font-size: 40px;">Level 4</h1> 
      <div>
        <a class="soal">
        <button class="button-sublevel-done">
          const button = document.getElementById("myButton");
        </button></a> 
      </div>
      
      <div>
        <a href="/Level4 3" class="soal">
        <button class="button-sublevel-done">
          function activateButton(){
      </button></a>
      </div>

      <div>
        <a class="soal">
          <button class="button-sublevel-done">
          button.addEventListener('click', () => {
      </button></a>
      </div>

      <div>
        <a class="soal">
        <button class="button-sublevel-done">  
        window.location.href = 'NextLevel.html';
        </button></a>
      </div>
      
      <div>
        <a class="soal">
        <button class="button-sublevel-done">  
      });
        <br>
      }
      <br>
      activateButton();
        </button></a>
      </div>


      <h1 style="color: rgb(189, 43, 226); font-size: 15px;">Kamu menyelesaikan separuh dunia inii!!<br>Tekan Next untuk melihat hasil akhirnya.</h1>
      <div class="button-container">
      <a id="nextButton" href="/Level4 done" class="button">Next</a>

    </div>
    </div>
  </div>
  <footer>
    <div>
      <h6>2024 Web World. Kelompok 8</h6>
    </div>
  </footer>

  <audio autoplay loop hidden>
    <source src="bgm/bgm_menu.mp3" type="audio/mpeg">
  </audio>

  <script src="js/notifikasi.js"></script>
</body>
</html>
