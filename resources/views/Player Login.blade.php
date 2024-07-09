<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Player Login</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body style="display: flex; background-image: url('images/bg.png'); background-image: url(/images/bg.png);">

<div class="login-container">
    <div class="login-form">
      <h1>LOGIN</h1>
      <form action="login.php" method="post" id="login-form">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username"><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br>
        <button type="submit" id="login-button">Login</button>
      </form>
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

</body>
</html>
