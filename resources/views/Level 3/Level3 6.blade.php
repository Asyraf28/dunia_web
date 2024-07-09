<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Level 3-2</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style_narasi.css">
</head>
<body style="display: flex; background-image: url('images/level3.png'); background-image: url(/images/level3.png);">

<div id="cutscene1" class="cutscene-overlay" onclick="hideCutscene()" style="background-color: rgba(10, 10, 10, 0.95);">
  <img src="images/enpisi_yes.png" alt="Notification Image" id="notif-image"></img>
    <div class="overlay-text">
    <h6>Utopia</h6>  
    Dengan begini, tombol akan tetap disana</div>
  </div>
<div id="cutscene2" class="cutscene-overlay" onclick="hideCutscene()" style="background-color: rgba(10, 10, 10, 0.95);">
  <img src="images/soal3.png" alt="Notification Image"></img>
  </div>
<div id="cutscene3" class="cutscene-overlay" onclick="hideCutscene()" style="background-color: rgba(10, 10, 10, 0.95);">
  <img src="images/soal3 done.png" alt="Notification Image"></img>
  </div>

  <div class="menu-container">
    <div class="menu-form">
    <h1 style="color: rgb(189, 43, 226); font-size: 40px;">Level 3</h1> 
    <a class="soal">
      <button class="button-sublevel-done">
        button
        <br>
          background-color: #fb9ad0;
          <br>
          border: none;
          <br>
          color: white;
          <br>
          padding: 10px 15px;
</button>
</a>

        <a class="soal">
          <button class="button-sublevel-done">
            text-align: center;
            <br>
            justify-content: center;
            <br>
            align-items: center;
</button>
</a>

        <a class="soal">
          <button class="button-sublevel-done">
                text-decoration: none;
                <br>
                display: inline-block;
                <br>
                font-size: 16px;
                <br>
                margin: 4px 2px;
                <br>
                cursor: pointer;
                <br>
                border-radius: 8px;
</button>
        </a>


        <h1 style="color: rgb(189, 43, 226); font-size: 15px; padding-top:20px;">Kerja Bagus!! Semua soal sudah kamu selesaikan. <br>Tekan Next untuk melihat hasil akhirnya.</h1>
      <div class="button-container">
      <a id="nextButton" href="/Level3 done" class="button">Next</a>
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
