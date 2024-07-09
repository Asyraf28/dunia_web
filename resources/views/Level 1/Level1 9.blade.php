<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Level 1 - 4</title>
  <link rel="stylesheet" href="css/style_narasi.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body style="display: flex; background-image: url('images/level1.png'); background-image: url(/images/level1.png);">
<div id="cutscene1" class="cutscene-overlay" onclick="hideCutscene()" style="background-color: rgba(10, 10, 10, 0.95);">
  <img src="images/enpisi_yes.png" alt="Notification Image" id="notif-image"></img>
    <div class="overlay-text">
    <h6>Utopia</h6>  
    {{ $narasi['lv1_4b'] ?? 'Banyak sekali hal misteri didunia ini!' }}
    </div>
  </div>

  <div class="menu-container">
    <div class="menu-form">
      <h1 style="color: rgb(189, 43, 226); font-size: 45px;">LEVEL 1</h1> 

      <div>
        <a class="soal">
        <button class="button-sublevel-done">&lt;h1&gt; Dunia Web &lt;/h1&gt;</button></a> 
      </div>
      <div>
        <a class="soal">
        <button class="button-sublevel-done">&lt;p&gt&ltb&gt; Hello &lt;/b&gt&lt/p&gt;</button></a>
      </div>
      <div>
        <a class="soal">
          <button class="button-sublevel-done">&lt;p&gt; Selamat Datang di Dunia Web &lt/p&gt;</button></a>
      </div>
      <div>
        <a class="soal"> 
          <button class="button-sublevel-done"> &ltp&gt; Dunia yang tidak pernah Anda ketahui isinya &lt;p&gt;</button></a>
      </div>

      <h1 style="color: rgb(189, 43, 226); font-size: 15px; padding-top:20px;">Kerja Bagus!! Semua soal sudah kamu selesaikan. <br>Tekan Next untuk melihat hasil akhirnya.</h1>

      <div class="button-container">
        <a href="/Level1 done" class="button">Next</a>
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
