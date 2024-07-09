<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Level Menu</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style_narasi.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body style="background-image: url('images/bg.png'); background-image: url(/images/bg.png);">

<div id="cutscene1" class="cutscene-overlay" onclick="hideCutscene()" style="background-color: rgba(10, 10, 10, 0.95); display: none;">
  <img src="images/enpisi.png" alt="Notification Image" id="notif-image">
  <div style="text-align: left; padding-left: 550px; padding-right: 100px;">
    <h2>SELAMAT DATANG</h2>
    <p style="font-size: medium;">Lost in the Web World adalah permainan teka-teki yang meliputi materi HTML, CSS, dan JavaScript.</p><br>
    <h4>Aturan Permainan:</h4>
    <p style="font-size: 20px;">Tiap level akan terdiri dari beberapa sub-level:</p>
    <ul style="font-size: medium;">
      <li>Jika jawaban kamu salah, kamu akan mendapatkan <b>pengurangan</b> score = -2</li>
      <li>Jika jawaban kamu benar, kamu akan mendapatkan <b>penambahan</b> score = 5</li>
      <li>Jika jawaban kamu membuka hint, kamu akan mendapatkan <b>pengurangan</b> score = -1</li>
      <li>Dapatkan score sebanyak-banyaknya untuk membuka level selanjutnya.</li>
    </ul>
  </div>
</div>

<div class="menu-container">
  <div class="menu-form">
    <h1 style="color: rgb(189, 43, 226); font-size: 40px;">LEVEL SELECTION</h1> 
    <div class="level-grid" style="padding: 0 0 30px 0;">
      <a id="level1" href="/Level1 awal" class="button disabled" data-score="0">
        <img src="images/level1.png" alt="Level 1">
        <span>Level 1</span>
        <div class="locked-message">Hubungi admin untuk mereset score</div>
      </a>
      <a id="level2" href="/Level2 awal" class="button disabled" data-score="16">
        <img src="images/level2.png" alt="Level 2">
        <span>Level 2</span>
        <div class="locked-message">Dapatkan 16 score untuk membuka</div>
      </a>
      <a id="level3" href="/Level3 awal" class="button disabled" data-score="30">
        <img src="images/level3.png" alt="Level 3">
        <span>Level 3</span>
        <div class="locked-message">Dapatkan 36 score untuk membuka</div>
      </a>
      <a id="level4" href="/Level4 awal" class="button disabled" data-score="40">
        <img src="images/level4.png" alt="Level 4">
        <span>Level 4</span>
        <div class="locked-message">Dapatkan 46 score untuk membuka</div>
      </a>
    </div>
    <a href="/player-menu" class="logout-button">Back</a>
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

<script>
  function typing(cutsceneId) {
    // Implement the typing function or ensure it's available
    console.log("Typing function called for: " + cutsceneId);
  }

  function showCutscene(cutsceneId) {
    typing(cutsceneId);
    $('#' + cutsceneId).css('display', 'flex');
  }

  function hideCutscene() {
    const currentCutscene = $('.cutscene-overlay').filter(function() {
      return $(this).css('display') === 'flex';
    });
    if (currentCutscene.length) {
      currentCutscene.css('display', 'none');
    }
  }

  // Start the first cutscene on page load
  $(document).ready(function() {
    showCutscene('cutscene1');
  });

  $(document).ready(function() {
    var userScore = {{ Auth::user()->score }}; // Dapatkan skor pengguna dari server-side
    console.log("User score:", userScore); // Log untuk debugging

    $('.button').each(function() {
      var requiredScore = $(this).data('score');
      console.log("Required score for this level:", requiredScore); // Log untuk debugging

      if (userScore < requiredScore) {
        $(this).addClass('disabled');
        $(this).click(function(event) {
          event.preventDefault();
        });
      } else {
        $(this).removeClass('disabled');
        $(this).unbind('click'); // Pastikan untuk menghapus penanganan klik jika level terbuka
      }
    });
  });
</script>

</body>
</html>
