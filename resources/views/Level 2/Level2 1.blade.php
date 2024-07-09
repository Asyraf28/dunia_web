<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Level 2-1</title>
  <link rel="stylesheet" href="css/style_narasi.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>


<body style="background-image: url('images/level2.png'); background-image: url(/images/level1.png);">
  <div class="profil" style="font-size:small; display:flex; margin-left: 400px;">
      <p style="margin-left: 30px;"><b>Welcome,</b> {{ Auth::user()->name }}</p>
      <p style="margin-left: 100px;"><b>Score: </b> {{ Auth::user()->score}}</p>
    </div>

  <div id="cutscene1" class="cutscene-overlay" onclick="hideCutscene()" style="background-color: rgba(10, 10, 10, 0.95);">
    <img src="images/enpisi.png" alt="Notification Image" id="notif-image"></img>
      <div class="overlay-text">
      <h6>Utopia</h6>  
      Oke, sekarang posisikan headernya ke tengah!</div>
    </div>

  <div id="cutscene2" class="cutscene-overlay" onclick="hideCutscene()" style="background-color: rgba(10, 10, 10, 0.95);">
    <img src="images/enpisi.png" alt="Notification Image" id="notif-image"></img>
      <div class="overlay-text">
      <h6>Utopia</h6>  
      Warna tidak dapat muncul begitu saja</div>
    </div>
  
  <div id="cutscene4" class="cutscene-overlay" onclick="hideCutscene()" style="background-color: rgba(10, 10, 10, 0.95);">
    <img src="images/enpisi_no.png" alt="Notification Image" id="notif-image"></img>
      <div class="overlay-text">
      <h6>Utopia</h6>  
      Ada yang kurang tepat!</div>
    </div>
  <div id="cutscene5" class="cutscene-overlay" onclick="hideCutscene()" style="background-color: rgba(10, 10, 10, 0.95);">
    <img src="images/enpisi_no.png" alt="Notification Image" id="notif-image"></img>
      <div class="overlay-text">
      <h6>Utopia</h6>  
      Bukan warna latar belakangnya yang diganti</div>
    </div>

    <div id="cutscene6" class="cutscene-overlay" onclick="hideCutscene()" style="background-color: rgba(10, 10, 10, 0.95);">
  <img src="images/enpisi.png" alt="Notification Image" id="notif-image"></img>
    <div class="overlay-text">
    <h6>Utopia</h6>  
    Kode untuk membuat alinea tulisan adalah (text-align)<br>
    Sedangkan kode untuk mewarnai tulisan adalah (color)
    </div>
  </div>

  <div style="display:flex;">
  <div class="left-side">
    <div style="display:flex;">
      <button class="button" onclick="updateScore(-1, '6')" style="font-size:small;">Hint</button>
      <h3>Penjelasan Level </h3>
    </div>
    <br>
    <li>Buat isi konten menjadi rata tengah</li>
    <li>Buat tulisan teks menjadi hitam</li>
</div>
<div class="right-side">
  <div class="menu-container">
    <div class="menu-form">
      <h1 style="color: rgb(189, 43, 226); font-size: 40px;">Level 2</h1> 
      <div style="padding: 0 0 30px 0;">
        <a class="soal"><span></span>(...........................)</a> 
      </div>
        <div>
          <h1 style="color: rgb(189, 43, 226); font-size: 15px;">Pilih Jawabannya!</h1>
        </div>
      <div class="button-container">
        <a class="button" onclick="updateScore(-2, '2')">header{align-text: center; Color: auto;}</a>
        <a class="button" onclick="updateScore(5, 'nextLevel')">header{text-align: center; Color: black;}</a> <br><br><br>
        <a class="button" onclick="updateScore(-2, '3')">header{justify-content: center; Color: auto;}</a>
        <a class="button" onclick="updateScore(-2, '4')">header{align-text: center; background-color: black;}</a>
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
          window.location.href = "/Level2 2";
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
