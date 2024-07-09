<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Player Register</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body style="display: flex; background-image: url('{{ asset('images/bg.png') }}');">

<div class="login-container">
    <div class="login-form" style="border-radius:30px;">
      <h1>REGISTER</h1>
      @if ($errors->any())
          <div>
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif
      <form action="{{ route('register') }}" method="post" id="register-form">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br>
        <label for="password_confirmation">Confirm Password:</label>
        <input type="password" id="password_confirmation" name="password_confirmation"><br>
        <button class="login-button" type="submit" id="register-button">Register</button>
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
