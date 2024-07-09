<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materi 7 - Dasar Javascript (DOM Manipulation)</title>
    <link rel="stylesheet" href="css/styleMateri.css">
</head>
<body>
    <div class="container">
        <div class="left-side">
            <a href="/Menu Materi" class="logout-button">Back</a>
            <h1 style="color: rgb(189, 43, 226); font-size: 40px;">Dasar Javascript (DOM Manipulation)</h1>
            <div style="padding: 10px 0 10px 0;">
                <p>Javascript adalah Bahasa pemrograman yang memungkinkan kita untuk menambah interaktivitas ke halaman web yang akan kita buat. salah satu fitur dalam interaktivitas ini adalah manupulasi Document Object Model (DOM). Document Object Model (DOM) adalah antarmuka pemrograman. manipulasi DOM adalah proses yang memungkinkan kita untuk mengubah struktur, gaya, atau konten dari halaman web. </p>
                <ol>
                    <li>
                        <h4>Mengakses elemen DOM</h4>
                        <p>Untuk mengakses elemen dalam DOM, dapat digunakan metode seperti:</p>
                        <ul>
                            <li>
                                <p>Mengakses elemen dengan ID</p>
                                <code>const elementById = document.getElementById('myElement');</code>
                            </li>
                            <li>
                                <p>Mengakses elemen dengan kelas</p>
                                <code>const elementsByClassName = document.getElementsByClassName('myClass');</code>
                            </li>
                            <li>
                                <p>Mengakses elemen dengan tag</p>
                                <code>const elementsByTagName = document.getElementsByTagName('div');</code>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <h4>Mengubah konten elemen</h4>
                        <p>Setelah kita mendapatkan akses ke sebuah elemen, kita dapat memodifikasi konten menggunakan innerHTML, contohnya:</p>
                        <code>element.innerHTML = 'Hello, World!';</code>
                    </li>
                    <li>
                        <h4>Menambahkan event listener </h4>
                        <p>Event listener digunakan untuk menangkap dan merespon berbagai jenis peristiwa seperti klik, input, hover, dan lainnya.</p>
                        <code>button.addEventListener('click', function() {alert(‘Click’); });</code>
                    </li>
                    <li>
                        <h4>Mengubah atribut</h4>
                        <p>Ini memungkinkan kita untuk memodifikasi atribut dari elemen yang ada.</p>
                    </li>
                </ol>
                <a href="https://www.w3schools.com/jsref/dom_obj_attributes.asp" class="logout-button" target="_blank">Materi DOM Selengkapnya...</a>
                <a href="https://www.w3schools.com/jsref/met_element_addeventlistener.asp " class="logout-button" target="_blank">Materi addeventlistener Selengkapnya...</a>
            </div>
        </div>
        <div class="right-side">
            <div class="image-top">
                <img src="images/materi7a.png" alt="Contoh Gambar Atas" style="width: 900px; height: auto;">
                <img src="images/materi7b.png" alt="Contoh Gambar Atas" style="width: 900px; height: auto;">
            </div>
            <div class="image-bottom">
                <img src="images/materi7c.png" alt="Contoh Gambar Bawah" style="width: 900px; height: auto;">
                <img src="images/materi7d.png" alt="Contoh Gambar Bawah" style="width: 900px; height: auto;">
                <img src="images/materi7e.png" alt="Contoh Gambar Bawah" style="width: 900px; height: auto;">
            </div>
        </div>
    </div>

    <audio autoplay loop hidden>
        <source src="bgm/bgm_menu.mp3" type="audio/mpeg">
    </audio>
</body>
</html>
