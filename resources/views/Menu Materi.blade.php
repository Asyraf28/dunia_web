<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilih Materi - Game Web</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body style="display: flex; background-image: url('images/bg.png'); background-image: url(/images/bg.png);">
    <div class="menu-container">
    <div class="login-form" style="border-radius:30px;">

        <table>
            <h1>MATERIALS</h1>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tittle</th>
                    <th>Chapter</th>
                </tr>
            </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td><a href="/materi1" style="color: black;">Dasar HTML</a></td>
                <td>HTML</td>
            </tr>
            <tr>
                <td>2</td>
                <td><a href="/materi2" style="color: black;">Dasar CSS</a></td>
                <td>CSS</td>
            </tr>
            <tr>
                <td>3</td>
                <td><a href="/materi3" style="color: black;">Button</a></td>
                <td>HTML/CSS</td>
            </tr>
            <tr>
                <td>4</td>
                <td><a href="/materi4" style="color: black;">Dasar Java Script</a></td>
                <td>JS</td>
            </tr>
            <!-- <tr>
                <td>5</td>
                <td><a href="/materi5" style="color: black;">Layouting</a></td>
                <td>HTML/CSS</td>
            </tr> -->
            <tr>
                <td>5</td>
                <td><a href="/materi6" style="color: black;">Property Dasar CSS</a></td>
                <td>CSS</td>
            </tr>
            <tr>
                <td>6</td>
                <td><a href="/materi7" style="color: black;">DOM Manipulation</a></td>
                <td>JS</td>
            </tr>
        </tbody>
    </table>
    <div style="padding: 10px 0 10px 0;">
        <a href="/player-menu" class="logout-button">Back</a>
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
    
</body>
</html>
