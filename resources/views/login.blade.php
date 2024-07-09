<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body style="display: flex; background-image: url('{{ asset('images/bg.png') }}');">

<div class="login-container">
    <div class="login-form" style="border-radius:30px;">
      <h1>LOGIN</h1>
      <p style="margin-bottom:30px;">Don't have an account? <a href="/register">Register here!</a></p>
      @if (session('error'))
          <div>{{ session('error') }}</div>
      @endif
      <form action="{{ route('login') }}" method="post" id="login-form">
        @csrf
        <label for="email">Email:</label>
        <input style="height:35px;" type="email" id="email" name="email"><br><br>
        <label for="password">Password:</label>
        <input style="height:35px;" type="password" id="password" name="password"><br>
        <button class="login-button" type="submit" id="login-button">Login</button>
      </form>
    </div>
  </div>

  <footer>
    <div>
      <h6>2024 Web World. Kelompok 8</h6>
    </div>
  </footer>

  <audio autoplay loop hidden>
    <source src="{{ asset('bgm/bgm_menu.mp3') }}" type="audio/mpeg">
  </audio>

</body>
</html>
