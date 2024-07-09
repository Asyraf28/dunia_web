<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body style="background-image: url('images/bg.png'); background-image: url(/images/bg.png);">

  <section class="title-section">
    <h1>Admin Dashboard</h1>
    <div class="menu-container">
    <!-- <div class="login-form" style="border-radius:30px;"> -->

    <!-- Form pencarian dan filter -->
    <form class="setting-item" action="{{ route('adminDashboard') }}" method="GET" style="margin-bottom: 20px;">
      <select name="sort" onchange="this.form.submit()" style="width:150px;">
      <option value="">Sort by</option>
        <option value="name_asc" {{ request()->query('sort') == 'name_asc' ? 'selected' : '' }}>Name Ascending</option>
        <option value="name_desc" {{ request()->query('sort') == 'name_desc' ? 'selected' : '' }}>Name Descending</option>
        <option value="email_asc" {{ request()->query('sort') == 'email_asc' ? 'selected' : '' }}>Email Ascending</option>
        <option value="email_desc" {{ request()->query('sort') == 'email_desc' ? 'selected' : '' }}>Email Descending</option>
        <option value="score_asc" {{ request()->query('sort') == 'score_asc' ? 'selected' : '' }}>Score Ascending</option>
        <option value="score_desc" {{ request()->query('sort') == 'score_desc' ? 'selected' : '' }}>Score Descending</option>
      </select>
      <input style="width:800px;" type="text" name="search" placeholder="Search by username or email" value="{{ request()->query('search') }}">
      <button type="submit" class="button">Search</button>
      <a style="width:110px" href="/" class="logout-button">Logout</a>
    </form>

    <table>
      <thead>
        <tr>
          <th>Username</th>
          <th>Email</th>
          <th>Score</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach($users as $user)
          <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->score }}</td>
            <td>
              <a href="{{ route('admin.edit.user', $user->id) }}" class="edit-button"><button class="button">Edit</button></a>
              <form action="{{ route('admin.delete.user', $user->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button class="button" type="submit" class="delete-button" onclick="return confirm('Are you sure?')">Delete</button>
              </form>
              <form action="{{ route('admin.reset.score', $user->id) }}" method="POST" style="display:inline;">
                @csrf
                <button class="button" type="submit" onclick="return confirm('Reset score for {{ $user->name }}?')">Reset Score</button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>


  </div>
  <!-- </div> -->
  </section>

  
  <footer>
    <div>
      <h6>2024 Web World. Kelompok 8</h6>
    </div>
  </footer>

  <audio autoplay loop hidden>
  <source src="bgm/dashboard.mp3" type="audio/mpeg">
</audio>

</body>
</html>
