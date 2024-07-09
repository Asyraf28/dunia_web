<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Level 2 - Selesai</title>
  <link rel="stylesheet" href="css/style_narasi.css">
  <link rel="stylesheet" href="css/style.css">
  <style>
    .big-yellow {
      font-size: 40px;
      color: yellow;
      text-align: center;
    }

    .big-purple {
      font-size: 40px;
      color: purple;
      text-align: center;
    }
  </style>
</head>
<body style="display: flex; background-image: url('images/level2.png'); background-image: url(/images/level2.png);">
  
  <div id="cutscene1" class="cutscene-overlay" onclick="showNextCutscene(2)" style="background-color: rgba(10, 10, 10, 0.95);">
    <img src="images/enpisi_yes.png" alt="Notification Image" id="notif-image"></img>
      <div class="overlay-text">
      <h6>Utopia</h6>
      <p class="typing-text" data-text="Memang seperti inilah seharusnya duniaku, begitu berwarna. Semua ini berkat dirimu"></p></div>
    </div>
  <div id="cutscene2" class="cutscene-overlay" onclick="showNextCutscene(3)" style="background-color: rgba(10, 10, 10, 0.95);">
    <img src="images/enpisi.png" alt="Notification Image" id="notif-image"></img>
      <div class="overlay-text">
      <h6>Utopia</h6>
      <p class="typing-text" data-text="B-Bukan begitu, maksudku dunia web yang kembali seperti semula!"></p></div>
    </div>
  <div id="cutscene3" class="cutscene-overlay" onclick="hideCutscene()" style="background-color: rgba(10, 10, 10, 0.95);">
    <img src="images/enpisi_yes.png" alt="Notification Image" id="notif-image"></img>
      <div class="overlay-text">
      <h6>Utopia</h6>  
      <p class="typing-text" data-text="Namun memang benar, tanpamu mungkin dunia ini akan monoton"></p></div>
    </div>
  <div id="cutscene3" class="cutscene-overlay" onclick="hideCutscene()" style="background-color: rgba(10, 10, 10, 0.95);">
    <img src="images/enpisi_yes.png" alt="Notification Image" id="notif-image"></img>
      <div class="overlay-text">
      <h6>Utopia</h6>
      <p class="typing-text" data-text="Baiklah, saatnya kita melanjutkan perjalanan lagi. Aku berfirasat kita akan menemukan petunjuk besar setelah ini!"></p></div>
    </div>

  <div class="menu-container">
    <div class="menu-form">
      <h1 style="color: rgb(189, 43, 226); font-size: 40px;">Level 2</h1> 
      <div style="padding: 0 0 30px 0;">
        <img src="images/soal2done.png" alt="soal1" style="height:200px;"> 
      </div>
      <div class="button-container">
        <a href="/Menu Materi" class="button">Materi</a>
        <a href="/player-menu" class="button">Main Menu</a>
        <a href="/Level Menu" class="button">Next</a>
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
