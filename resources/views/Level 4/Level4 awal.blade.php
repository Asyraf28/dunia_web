<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Level 4</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style_narasi.css">
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
<body style="display: flex; background-image: url('images/level4.png'); background-image: url(/images/level4.png);">

<div id="cutscene1" class="cutscene-overlay" onclick="showNextCutscene(2)" style="background-color: rgba(10, 10, 10, 1);">
  <img src="images/enpisi_no.png" alt="Notification Image" id="notif-image"></img>
    <div class="overlay-text">
    <h6>Utopia</h6>  
    <p class="typing-text" data-text="Untuk mengaktifkan pintunya, kita harus menekan tombol ini, sepertinya tombolnya sudah malfungsi"></p>
  </div>
  </div>

  <div id="cutscene2" class="cutscene-overlay" onclick="showNextCutscene(3)" style="background-color: rgba(10, 10, 10, 0.5);">
  <img src="images/enpisi_yes.png" alt="Notification Image" id="notif-image"></img>
    <div class="overlay-text">
    <h6>Utopia</h6>  
    <p class="typing-text" data-text="Kau ingin mencoba memperbaiki tombolnya?"></p>
  </div>
  </div>

  <div id="cutscene3" class="cutscene-overlay" onclick="showNextCutscene(4)" style="background-color: rgba(10, 10, 10, 0.5);">
  <img src="images/enpisi.png" alt="Notification Image" id="notif-image"></img>
    <div class="overlay-text">
    <h6>Utopia</h6>  
    <p class="typing-text" data-text="Baiklah jika begitu, lebih baik mencoba daripada terus merenung!"></p>
  </div>
  </div>

  <div class="menu-container">
      <div class="menu-form">
      <h1 style="color: rgb(189, 43, 226); font-size: 40px;">Level 4</h1> 
      <div style="padding: 0 0 30px 0;">
        <img src="images/soal4.png" alt="soal1" style="height:200px;"> 
      </div>
      <div class="button-container">
      <h1 style="color: rgb(189, 43, 226); font-size: 15px; padding-top:20px;">Bentuk Web rusak <br>Tekan Next untuk melihat hasil akhirnya.</h1>
        <a href="/Level4 1" class="button">Next</a>
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
