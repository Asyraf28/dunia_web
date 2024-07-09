<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materi 2 - Dasar CSS</title>
    <link rel="stylesheet" href="css/styleMateri.css">
</head>
<body>
    <div class="container">
        <div class="left-side">
            <a href="/Menu Materi" class="logout-button">Back</a>
            <h1 style="color: rgb(189, 43, 226); font-size: 40px;">Dasar CSS</h1>
            <div style="padding: 10px 0 10px 0;">
                <h2>Apa itu CSS?</h2>
                <p>CSS adalah singkatan dari Cascading Style Sheet. CSS dapat digunakan untuk menata tampilan halaman web, seperti warna, font, ukutan teks, dan tata letak.</p>
                <h4>Membuat Background</h4>
                <ul>
                    <li>
                        <p><b>background-color:</b> Menentukan warna background elemen. Contoh: background-color: #FF0000; (merah). </p>
                        <p>Kita bisa memberikan nilai warna pada property background seperti nama warna, kode heksadesimal warna, fungsi rgb (), rgba(), hsl(). dan sebagainya</p>
                    </li>
                    <li>
                        <p><b>background-image:</b> Menentukan gambar yang digunakan sebagai background. Format gambar yag didukung bisa : jpg, png, gof, webp, avif, svg, dll</p>
                        <h5>contoh</h5>
                        <ol>background-image: url("image.jpg "); </ol>
                        <ol>background-image: url("paper.gif");  </ol>
                    </li>
                    <br>
                    <li><p><b>background-repeat:</b> Menentukan bagaimana gambar background diulang. Untuk mengulang gambar secara horzontal menggunakan repeat-x</p>
                        <h5>contoh</h5>
                        <ol>background-image: url("image.jpg "); </ol>
                        <ol> background-repeat: repeat-x  </ol>
                        <br>
                        <p>Untuk mengulang gambar secara vertical dapat menggunakan repeat-y</p>
                        <h5>contoh</h5>
                        <ol>background-image: url("image.jpg "); </ol>
                        <ol>background-repeat: repeat-y</ol>
                    </li>
                    <br>
                    <li><b>background-position:</b> Menentukan posisi gambar background. Contoh: background-position: center; (di tengah).</li>
                </ul>

                <h4>Peletakkan Tulisan</h4>
                <p>Dalam mengatur peletakan tulisan pada elemen HTML dapat menggunakan properti CSS berikut ini : </p>
                <ul>    
                    <p>teks-align: menentukan perataan teks dalam elemen </p>
                    <li><b>left</b> untuk rata kiri</li>
                    <li><b>right</b> untuk rata kanan</li>
                    <li><b>center</b> untuk rata tengah</li>
                    <li><b>justify</b> untuk rata kiri dan kanan</li>
                    <li><b>start</b> rata pada awal (mengikuti direction)</li>
                    <li><b>end</b> rata pada akhir (mengikuti direction)</li>

                    <h5>contoh</h5>
                    <ol>header {text-align: center;}</ol>
                    <ol>p {text-align: justify; }</ol>

                    <p>Teks indent: untuk menentukan indentasi teks</p>
                </ul>

                <h4>Pewarnaan tulisan </h4>
                <ul>
                    <li><b>color:</b>Menentukan warna tulisan. Contoh: color: #0000FF; (biru). </li>
                    <li><b>font-family:</b>Menentukan jenis font yang digunakan. Contoh: font-family: Arial, sans-serif; </li>
                    <li><b>font-size:</b>Menentukan ukuran font. Contoh: font-size: 16px;</li>
                </ul>
                <a href="https://www.w3schools.com/css/css_background.asp" class="logout-button" target="_blank">Materi Background Selengkapnya...</a>
                <a href="https://www.w3schools.com/css/css_background_image.asp" class="logout-button" target="_blank">Materi Image Selengkapnya...</a>
                <a href="https://www.w3schools.com/css/css_background_repeat.asp" class="logout-button" target="_blank">Materi Repeat Selengkapnya...</a>
                <a href="https://www.w3schools.com/css/css_text.asp" class="logout-button" target="_blank">Materi Text Selengkapnya...</a>
                <a href="https://www.w3schools.com/css/css_text_align.asp" class="logout-button" target="_blank">Materi Align Selengkapnya...</a>
            </div>
        </div>
        <div class="right-side">
            <div class="image-top">
                <img src="images/materi2a.png" alt="Contoh Gambar Atas" style="width: 900px; height: auto;">
                <img src="images/materi2b.png" alt="Contoh Gambar Atas" style="width: 900px; height: auto;">
            </div>
            <div class="image-bottom">
                <img src="images/materi2c.png" alt="Contoh Gambar Bawah" style="width: 900px; height: auto;">
            </div>
        </div>
    </div>

    <audio autoplay loop hidden>
        <source src="bgm/bgm_menu.mp3" type="audio/mpeg">
    </audio>
</body>
</html>
