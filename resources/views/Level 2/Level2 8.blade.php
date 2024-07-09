<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Level 2-4</title>
  <link rel="stylesheet" href="css/style_narasi.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body style="display: flex; background-image: url('images/level2.png'); background-image: url(/images/level2.png);">

  <div id="cutscene1" class="cutscene-overlay" onclick="hideCutscene()" style="background-color: rgba(10, 10, 10, 0.95);">
    <img src="images/enpisi_yes.png" alt="Notification Image" id="notif-image"></img>
      <div class="overlay-text">
      <h6>Utopia</h6>  
      Tepat sekali, kau menyelesaikannya!</div>
    </div>

  <div class="menu-container">
    <div class="menu-form">
      <h1 style="color: rgb(189, 43, 226); font-size: 40px;">Level 2</h1>
      <div>
        <a class="soal">
          <button class="button-sublevel-done">header{text-align: center; Color: black;}</a>
      </div>
      <div>
        <a class="soal">
          <button class="button-sublevel-done">body{background-color: #bc7fcd; align-items: center;}</a>
      </div>
      <div>
        <a class="soal">
          <button class="button-sublevel-done">h1{text-align: center; color: white;}</a>
      </div>
      <div>
        <a href="/Level2 7" class="soal">
          <button class="button-sublevel-done">p{text-align: left; color: white;}</a>
      </div>
      <h1 style="color: rgb(189, 43, 226); font-size: 15px; padding-top:20px;">Kerja Bagus!! Semua soal sudah kamu selesaikan. <br>Tekan Next untuk melihat hasil akhirnya.</h1>
      <div class="button-container">
      <a id="nextButton" href="/Level2 done" class="button">Next</a>
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
