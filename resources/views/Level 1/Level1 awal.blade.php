<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Level Menu</title>
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
<body style="display: flex; background-image: url('images/level1.png'); background-image: url(/images/level1.png);">

<!-- NARASI -->
<div id="cutscene1" class="cutscene-overlay" onclick="showNextCutscene(2)" style="background-color: rgba(0, 0, 0, 1);">
    <p class="typing-text" data-text="Kamu terbangun ke dalam sebuah halaman kosong..."></p>
  </div>
  <div id="cutscene2" class="cutscene-overlay" onclick="showNextCutscene(3)" style="background-color: rgba(0, 0, 0, 1);">
    <p class="typing-text" data-text="Dari kejauhan, kamu melihat seorang wanita berkacamata mendekatimu..."></p>
  </div>

  <div id="cutscene3" class="cutscene-overlay" onclick="showNextCutscene(4)" style="background-color: rgba(10, 10, 10, 1);">
  <img src="images/enpisi.png" alt="Notification Image" id="notif-image"></img>
    <div class="overlay-text">
    <h6>Utopia</h6>  
    <p class="typing-text" data-text="Haii, apa kamu tidak apa-apa?"></p>
  </div>
  </div>

  <div id="cutscene4" class="cutscene-overlay" onclick="showNextCutscene(5)" style="background-color: rgba(10, 10, 10, 1);">
  <img src="images/enpisi.png" alt="Notification Image" id="notif-image"></img>
    <div class="overlay-text">
    <h6>Utopia</h6>  
    <p class="typing-text" data-text="Sepertinya kamu bukan orang sini."></p>
    </div>
  </div>

  <div id="cutscene5" class="cutscene-overlay" onclick="showNextCutscene(6)" style="background-color: rgba(10, 10, 10, 0.95);">
  <img src="images/enpisi_yes.png" alt="Notification Image" id="notif-image"></img>
    <div class="overlay-text">
    <h6>Utopia</h6>  
    <p class="typing-text" data-text="Kalau kamu penasaran, kita sekarang ada di.... Hmmmmm... "></P>
    </div>
  </div>

  <div id="cutscene6" class="cutscene-overlay" onclick="showNextCutscene(7)" style="background-color: rgba(10, 10, 10, 0.5);">
  <img src="images/enpisi_no.png" alt="Notification Image" id="notif-image"></img>
    <div class="overlay-text">
    <h6>Utopia</h6>
    <p class="typing-text" data-text="Maaf aku melupakannya, maukah kamu bantu aku untuk mengingat tempat ini bersama?"></p>  
    </div>
  </div>


  <div class="menu-container">
      <div class="menu-form">
      <h1 style="color: rgb(189, 43, 226); font-size: 45px;">LEVEL 1</h1> 
      <div style="padding: 0 0 30px 0;">
        <img src="images/soal1.png" alt="soal1" style="height:200px;"> 
      </div>

      <h1 style="color: rgb(189, 43, 226); font-size: 15px; padding-top:20px;">Bentuk Web rusak <br>Tekan Next untuk melihat hasil akhirnya.</h1>

      <div class="button-container">
        <a href="/Level1 2" class="button">Next</a>
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
