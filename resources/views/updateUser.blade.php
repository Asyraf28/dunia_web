<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update User</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
  <form action="{{ route('update.user', $user->id) }}" method="post">
    @csrf
    @method('PUT')
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="{{ $user->name }}"><br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="{{ $user->email }}"><br>
    <label for="score">Score:</label>
    <input type="number" id="score" name="score" value="{{ $user->score }}"><br>
    <button type="submit">Update</button>
  </form>
</body>
</html>
