<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materi 3 - Membuat Button</title>
    <link rel="stylesheet" href="css/styleMateri.css">
</head>
<body>
    <div class="container">
        <div class="left-side">
            <a href="/Menu Materi" class="logout-button">Back</a>
            <h1 style="color: rgb(189, 43, 226); font-size: 40px;">Membuat Button</h1>
            <div style="padding: 10px 0 10px 0;">
                <h2>Apa itu Button?</h2>
                <p>Button adalah elemen interaktif pada html  yang memungkinkan pengguna melakukan tindakan tertentu ketika di klik. Elemen button dapat berisi teks, gambar, atau konten lainnya.</p>
                <h4>Button Pada HTML</h4>
                <p>Untuk membuat tombol di html, kita menggunakan tag <code>&lt;button&gt;</code>. Tag ini akan menghasilkan elemen berbentuk tombol standar pada halaman. Kita juga dapat menambahkan teks pada bagian antara tag pembuka dan penutup</p>
                <ul>    
                    <h5>contoh:</h5>Player Menu.html
                    <ol><code>&lt;button&gt;</code>Kirim<code>&lt;/button&gt;</code></ol>
                </ul>
                <h4>Button Pada CSS</h4>
                <p>Untuk kustomisasi menggunakan css, kita dapat membuat file yg berbeda menggunakan ‘style.css’. pada bagian ini kita dapat menentukan warna, menambahkan padding, mengatur teks, dan menambahkan efek hover .</p>
                <ul>    
                    <h5>contoh:</h5>
                    <ol><code>.btn &#123;</code></ol>
                    <ol><code>background-color: #4CAF50;</code></ol>
                    <ol><code>border: none;</code></ol>
                    <ol><code>color: white;</code></ol>
                    <ol><code>padding: 15px 32px;</code></ol>
                    <ol><code>text-align: center</code></ol>
                    <ol><code>text-decoration: none;</code></ol>
                    <ol><code>display: inline-block;</code></ol>
                    <ol><code>font-size: 16px;</code></ol>
                    <ol><code>margin: 4px 2px;</code></ol>
                    <ol><code>cursor: pointer;</code></ol>
                    <ol><code>border-radius: 8px;</code></ol>
                    <ol><code>&#125;</code></ol>
                </ul>
                <a href="https://www.w3schools.com/css/css3_buttons.asp" class="logout-button" target="_blank">Selengkapnya...</a>
            </div>
        </div>
        <div class="right-side">
            <div class="image-top">
                <img src="images/materi3a.png" alt="Contoh Gambar Atas" style="width: 900px; height: auto;">
            </div>
            <div class="image-bottom">
                <img src="images/materi3b.png" alt="Contoh Gambar Bawah" style="width: 900px; height: auto;">
            </div>
        </div>
    </div>

    <audio autoplay loop hidden>
        <source src="bgm/bgm_menu.mp3" type="audio/mpeg">
    </audio>
</body>
</html>
