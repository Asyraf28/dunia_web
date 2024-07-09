<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Level 1 - 1</title>
  <link rel="stylesheet" href="css/style_narasi.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body style="display:flex; background-image: url('images/level1.png'); background-image: url(/images/level1.png);">


<div id="cutscene1" class="cutscene-overlay" onclick="hideCutscene()" style="background-color: rgba(10, 10, 10, 0.95);">
  <img src="images/enpisi_yes.png" alt="Notification Image" id="notif-image"></img>
    <div class="overlay-text">
    <h6>Utopia</h6>  
    {{ $narasi['lv1_1c'] ?? 'Kau benar, inilah nama duniaku!' }}
    </div>
  </div>
<div id="cutscene2" class="cutscene-overlay" onclick="hideCutscene()" style="background-color: rgba(10, 10, 10, 0.95);">
  <img src="images/soal1.png" alt="Notification Image"></img>
  </div>
<div id="cutscene3" class="cutscene-overlay" onclick="hideCutscene()" style="background-color: rgba(10, 10, 10, 0.95);">
  <img src="images/soal1done.png" alt="Notification Image"></img>
  </div>



  <div class="menu-container">
    <div class="menu-form">
      <h1 style="color: rgb(189, 43, 226); font-size: 45px;">LEVEL 1</h1> 

      <div>
        <a class="soal">
          <button class="button-sublevel-done">&lt;h1&gt; Dunia Web &lt;/h1&gt;</button></a> 
      </div>
      <div>
        <a href="/Level1 4" class="soal">
          <button class="button-sublevel"><b>(Soal Nomor 2)</b></button></a>
      </div>
      <div>
        <a class="soal">
          <button class="button-sublevel-disable">(Soal Nomor 3)</button></a>
      </div>
      <div>
        <a class="soal">
          <button class="button-sublevel-disable">(Soal Nomor 4)</button></a>
      </div>

      <h1 style="color: rgb(189, 43, 226); font-size: 15px; padding-top:20px;">Pilih soal berikutnya!!</h1>
      <div class="button-container">
      <!-- <a href="/Level1 2" class="button">Back</a> -->
      <a href="/Menu Materi" class="button">Materi</a>
      <a class="button" onclick="showNextCutscene(2)">Soal</a>
      <a class="button" onclick="showNextCutscene(3)">Target</a>
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
