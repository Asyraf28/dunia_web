<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Player Menu</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body style="background-image: url('{{ asset('images/bg.png') }}'); background-image: url('/images/bg.png');">

<section class="title-section">
  <h3 style="margin-left:300px;">Lost In The</h3>
  <h1>WEB WORLD</h1>
  <div class="profil" style="font-size:small; display:flex; margin-left: 310px;">
    <p style="margin-left: 30px;"><b>Welcome,</b> {{ Auth::user()->name }}</p>
    <p style="margin-left: 100px;"><b>Score: </b> {{ Auth::user()->score}}</p>
  </div>
</section>

<section class="menu-section" style="padding: 0px 400px 0 400px;">
  <div class="menu-container">
    <div class="menu-form" style=" border-radius:20px;">
      <ul class="menu-level-1">
        <li><a href="/Level Menu" class="button">Start</a></li>
        <li><a href="/Menu Materi" class="button">Materials</a></li>
        <li><a href="/Menu Settings" class="button">Settings</a></li>
      </ul>
      <a href="/" class="logout-button">Logout</a>
    </div>
  </div>
</section>

<footer>
  <div>
    <h6>2024 Web World. Kelompok 8</h6>
  </div>
</footer>

<audio autoplay loop hidden>
  <source src="{{ asset('bgm/bgm_menu.mp3') }}" type="audio/mpeg">
</audio>

<script src="js/notifikasi.js"></script>
</body>
</html>
