<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materi 4 - Dasar Javascript</title>
    <link rel="stylesheet" href="css/styleMateri.css">
</head>
<body>
    <div class="container">
        <div class="left-side">
            <a href="/Menu Materi" class="logout-button">Back</a>
            <h1 style="color: rgb(189, 43, 226); font-size: 40px;">Dasar Javascript</h1>
            <div style="padding: 10px 0 10px 0;">
                <h2>Apa itu Java Script?</h2>
                <p>Javascript adalah Bahasa pemrograman yang memungkinkan kita untuk menambah interaktivitas ke halaman web yang akan kita buat </p>
                <h4>Variabel</h4>
                <p>Variable adalah wadah yang digunakan untuk menyimpan nilai atau data untuk digunkanan dalam program yang dibuat. Variable dalam java script dapat dideklarasikan dengan 3 cara yaitu</p>
                <ul>
                    <li>
                        <h4>var</h4>
                        <p>Ketika kita menggunakna var maka kita dapat mendeklarasikan ulang variable dengan nama yang sama dan nilai sebelumnya akan kita timpa. Variable yang menggunkan var maka dapat diubah nilainya </p>
                        <p><strong>Contoh: </strong><code>var name ="John";</code></p>
                    </li>
                    <li>
                        <h4>let</h4>
                        <p>let biasanya digunakan untuk membuat variable yang nilainya dapat diubah. Variable menggunkan let tidak dapat dideklarasikan ulang.</p>
                        <p><strong>Contoh: </strong><code>let age =30;</code></p>
                    </li>
                    <li>
                        <h4>const</h4>
                        <p>Variabel menggunkan const tidak dapat dideklarasikan ulang dan nilainya tidak dapat diubah.</p>
                        <p><strong>Contoh: </strong><code>const PI =3.14159;</code></p>
                    </li>
                </ul>

                <h4>Class</h4>
                <p>Class adalah konsep pemrograman berorientasi object dalam javascript. Class mendefinisikan property (data) dan method (fungsi) yang dimiliki oleh object. </p>
                <ul>
                    <h5>Contoh:</h5>
                    <ol><code>class Car &#123;</code></ol>
                    <ol><code>constructor(name, year) &#123;</code></ol>
                    <ol><code>this.name = name;</code></ol>
                    <ol><code>this.year = year;&#125;&#125;</code></ol><br>
                    <ol><code>const myCar1 = new Car("Ford", 2014);</code></ol>
                    <ol><code>const myCar2 = new Car("Audi", 2019);</code></ol>
                    <ol><code>document.getElementById("demo").innerHTML =</code></ol>
                    <ol><code>myCar1.name + " " + myCar2.name;</code></ol>
                </ul>
                
                <h4>ID</h4>
                <p>ID digunakan untuk memberikan identifikasi unik pada elemen html. ID yang diakses melalui JavaScript digunakan untuk memanipulasi elemen tersebut. ID diawali dengan karakter #. </p>
                <ul>
                    <h5>Contoh:</h5>
                    <li>HTML</li>
                    <ol><code>&lt;h1 id="title"&gt;Judul Halaman&lt;/h1&gt;</code></ol><br>
                    <li>Javascript</li>
                    <ol><code>const titleElement = document.getElementById("title");</code></ol>
                    <ol><code>titleElement.style.color = "red"; </code></ol>
                </ul>

                <h4>Function</h4>
                <p>Function adalah blok kode yang dirancang untuk melakukan tugas tertentu. Fungsi JavaScript didefinisikan dengan kata kunci function diiikuti nama dan tanda kurung (). Kode dalam fungsi akan dijalankan ketika ada sesuatu yang memanggil fungsi tersebut. </p>
                <ul>
                    <h5>Contoh:</h5>
                    <ol><code>let x = myFunction(4, 3);</code></ol>
                    <ol><code>document.getElementById("demo").innerHTML = x;</code></ol><br>
                    <ol><code>function myFunction(a, b) &#123;</code></ol>
                    <ol><code>return a * b; &#125;</code></ol>
                </ul>
                <a href="https://www.w3schools.com/js/js_syntax.asp" class="logout-button" target="_blank">Selengkapnya...</a>
            </div>
        </div>
        <div class="right-side">
            <div class="image-top">
                <img src="images/materi4a.png" alt="Contoh Gambar Atas" style="width: 100%; height: auto;">
            </div>
            <div class="image-bottom" style="display: flex; gap: 10px;">
                <img src="images/materi4b.png" alt="Contoh Gambar Bawah" style="width: 50%; height: auto;">
                <img src="images/materi4c.png" alt="Contoh Gambar Bawah" style="width: 50%; height: auto;">
        </div>
    </div>

    <audio autoplay loop hidden>
        <source src="bgm/bgm_menu.mp3" type="audio/mpeg">
    </audio>
</body>
</html>
