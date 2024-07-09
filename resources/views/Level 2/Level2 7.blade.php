<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Level 2-4</title>
  <link rel="stylesheet" href="css/style_narasi.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body style="background-image: url('images/level2.png'); background-image: url(/images/level1.png);">
  <div class="profil" style="font-size:small; display:flex; margin-left: 450px;">
      <p style="margin-left: 30px;"><b>Welcome,</b> {{ Auth::user()->name }}</p>
      <p style="margin-left: 100px;"><b>Score: </b> {{ Auth::user()->score}}</p>
    </div>

  <div id="cutscene1" class="cutscene-overlay" onclick="hideCutscene()" style="background-color: rgba(10, 10, 10, 0.95);">
    <img src="images/enpisi.png" alt="Notification Image" id="notif-image"></img>
      <div class="overlay-text">
      <h6>Utopia</h6>  
      Sekarang, ganti teksnya menjadi warna putih dan rata kiri</div>
    </div>

  <div id="cutscen2" class="cutscene-overlay" onclick="hideCutscene()" style="background-color: rgba(10, 10, 10, 0.95);">
    <img src="images/enpisi_no.png" alt="Notification Image" id="notif-image"></img>
      <div class="overlay-text">
      <h6>Utopia</h6>  
      Seingatku tidak ada kode seperti ini</div>
    </div>
  
  <div id="cutscene3" class="cutscene-overlay" onclick="hideCutscene()" style="background-color: rgba(10, 10, 10, 0.95);">
    <img src="images/enpisi_no.png" alt="Notification Image" id="notif-image"></img>
      <div class="overlay-text">
      <h6>Utopia</h6>  
      Mungkin kau salah memposisikan teks?</div>
    </div>
  <div id="cutscene4" class="cutscene-overlay" onclick="hideCutscene()" style="background-color: rgba(10, 10, 10, 0.95);">
    <img src="images/enpisi_no.png" alt="Notification Image" id="notif-image"></img>
      <div class="overlay-text">
      <h6>Utopia</h6>  
      Warnanya bukan yang ini kan?</div>
    </div>

    
    <div id="cutscene5" class="cutscene-overlay" onclick="hideCutscene()" style="background-color: rgba(10, 10, 10, 0.95);">
  <img src="images/enpisi_no.png" alt="Notification Image" id="notif-image"></img>
    <div class="overlay-text">
    <h6>Utopia</h6>
    Ini masih sama seperti sebelumnya...<br>  
    Kode untuk membuat alinea tulisan adalah (text-align)<br>
    Sedangkan kode untuk mewarnai tulisan adalah (color)
    </div>
  </div>

  <div style="display:flex;">
  <div class="left-side">
    <div style="display:flex;">
      <button class="button" onclick="updateScore(-1, '5')" style="font-size:small;">Hint</button>
      <h3>Penjelasan Level </h3>
    </div>
    <br>
    <li>Buat teks menjadi rata kiri</li>
    <li>Buat warna menjadi putih</li>
</div>
<div class="right-side">
  <div class="menu-container">
    <div class="menu-form">
      <h1 style="color: rgb(189, 43, 226); font-size: 40px;">Level 2</h1> 
      <div style="padding: 0 0 30px 0;">p{(.............................)}
      </div>
        <div>
          <h1 style="color: rgb(189, 43, 226); font-size: 15px;">Pilih Jawabannya!</h1>
        </div>
      <div class="button-container">
        <a class="button" onclick="updateScore(-2, '2')"" >justify-text: left; color-text: white;</a>
        <a class="button" onclick="updateScore(-2, '3')"" >text-align: center; color-items: white;</a><br><br><br>
        <a class="button" onclick="updateScore(-2, '4')"" >text-align: left; color: black;</a>
        <a class="button" onclick="updateScore(5, 'nextLevel')">text-align: left; color: white;</a>
      </div>
    </div>
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
  <script>
    let score = 0;

  function updateScore(value, action) {
    score += value;
    console.log('Current Score: ', score);

    $.ajax({
      url: "{{ route('update.score') }}",
      method: 'POST',
      data: {
        _token: '{{ csrf_token() }}',
        score: value
      },
      success: function(response) {
        console.log(response);
        if (action === 'nextLevel') {
          window.location.href = "/Level2 8";
        } else {
          showNextCutscene(action);
          // location.reload();
        }
      },
      error: function(xhr, status, error) {
        console.error('Error:', error);
      }
    });
  }
  </script>
</body>
</html>
