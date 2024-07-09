<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Level 4 - 1</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style_narasi.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body style="background-image: url('images/level4.png'); background-image: url(/images/level1.png);">
  <div class="profil" style="font-size:small; display:flex; margin-left: 530px;">
      <p style="margin-left: 30px;"><b>Welcome,</b> {{ Auth::user()->name }}</p>
      <p style="margin-left: 100px;"><b>Score: </b> {{ Auth::user()->score}}</p>
    </div>

<div id="cutscene1" class="cutscene-overlay" onclick="hideCutscene()" style="background-color: rgba(10, 10, 10, 0.95);">
  <img src="images/enpisi_yes.png" alt="Notification Image" id="notif-image"></img>
    <div class="overlay-text">
    <h6>Utopia</h6>  
    Sekarang, mari kita nyalakan tombolnya!!</div>
  </div>

<div id="cutscene2" class="cutscene-overlay" onclick="hideCutscene()" style="background-color: rgba(10, 10, 10, 0.95);">
  <img src="images/enpisi_no.png" alt="Notification Image" id="notif-image"></img>
    <div class="overlay-text">
    <h6>Utopia</h6>  
    Ada sedikit kata yang kurang!</div>
  </div>
<div id="cutscene3" class="cutscene-overlay" onclick="hideCutscene()" style="background-color: rgba(10, 10, 10, 0.95);">
  <img src="images/enpisi_no.png" alt="Notification Image" id="notif-image"></img>
    <div class="overlay-text">
    <h6>Utopia</h6>  
    Kode begitu responsif, jadi teliti besar kecilnya yaa!</div>
  </div>

  <div id="cutscene4" class="cutscene-overlay" onclick="hideCutscene()" style="background-color: rgba(10, 10, 10, 0.95);">
  <img src="images/enpisi.png" alt="Notification Image" id="notif-image"></img>
    <div class="overlay-text">
    <h6>Utopia</h6>  
    Perhatikan besar kecil tulisan. <br>
    Perhatikan pula (:) dan (;) 
    </div>
  </div>

  <div style="display:flex;">
  <div class="left-side">
    <div style="display:flex;">
      <button class="button" onclick="updateScore(-1, '4')" style="font-size:small;">Hint</button>
      <h3>Penjelasan Level </h3>
    </div>
    <br>
    <p>Buat perintah Java untuk memanggil elemen id myBotton dan dimasukan ke dalam variabel button</p>
</div>
<div class="right-side">
<div class="login-container">
  <div class="login-form">
    <h1>Soal</h1>
    <div style="padding: 0 0 30px 0;">
        <a class="soal"><span>(......................)</span>
      </div>
      
      <h1 style="color: rgb(189, 43, 226); font-size: 15px;">Pilih Jawabannya!</h1>
      <div class="button-container">
        <a onclick="updateScore(5, 'nextLevel')" class="button" >A. const button = document.getElementById(“myButton”)</a><br><br><br>
        <a onclick="updateScore(-2, '2')" class="button">B. const button = document.getElementId(“myButton”);</a><br><br><br>
        <a onclick="updateScore(-2, '3')" class="button">C. const button = document.GetElementById(“myButton”);</a>
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
          window.location.href = "/Level4 2";
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
