<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setting - Dunia Web</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body style="background-image: url('images/bg.png'); background-image: url(/images/bg.png);">
    <div class="container" >
    <div class="container" style="border-radius:30px;">
        <h1 class="title" style="color: #811f7c;">SETTINGS</h1>
        <form action="#">
            <label for="language" style="font-weight: bold;">Pilih Bahasa:</label><br>
            <div class="setting-item">
                <label for="indonesia">Bhs Indonesia</label>
                <input type="radio" id="indonesia" name="language" value="indonesia">
                <label for="english">Bhs Inggris</label>
                <input type="radio" id="english" name="language" value="english">
            </div>
            <label for="volume" style="font-weight: bold;">Volume:</label><br>
            <div class="setting-item">
                <input type="range" id="volume" name="volume" min="0" max="100">
            </div>
            <label for="screen-mode" style="font-weight: bold;">Screen Mode:</label><br>
            <div class="setting-item">
                <label for="full">Full Screen</label>
                <input type="radio" id="fullscreen-button" name="language" value="full">
                <label for="english">Windowed</label>
                <input type="radio" id="wide" name="language" value="wide">
            </div>
            <label for="resolution">Resolusi</label><br>
            <div class="setting-item">
                <select id="resolution" name="resolution">
                    <option value="800x600">800x600</option>
                    <option value="1024x768">1024x768</option>
                    <option value="1280x720">1280x720</option>
                    <option value="1920x1080">1920x1080</option>
                </select>
            </div>
        </form>
        <a href="/player-menu" class="button" >Back</a>
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
