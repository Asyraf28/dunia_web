<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit User</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body style="background-image: url('images/bg.png'); background-image: url(/images/bg.png); display:flex;">

    <section>
      <div class="login-container">
        <div class="login-form" style="border-radius:30px;">
    <h2>Edit User</h2>
    <form action="{{ route('admin.update.user', $user->id) }}" method="post">
      @csrf
      @method('PUT')
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" value="{{ $user->name }}" required><br>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" value="{{ $user->email }}" required><br>

      <label for="password">Password (leave blank to keep current password):</label>
      <input type="password" id="password" name="password"><br>

      <label for="password_confirmation">Confirm Password:</label>
      <input type="password" id="password_confirmation" name="password_confirmation"><br>

      <button type="submit">Update</button>
    </form>
</div>
</div>
  </section>

  <footer>
    <div>
      <h6>2024 Web World. Kelompok 8</h6>
    </div>
  </footer>
</body>
</html>
