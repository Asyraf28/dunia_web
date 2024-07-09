<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materi 1 - Dasar HTML</title>
    <link rel="stylesheet" href="css/styleMateri.css">
</head>
<body>
    <div class="container">
        <div class="left-side">
            <a href="/Menu Materi" class="logout-button">Back</a>
            <h1 style="color: rgb(189, 43, 226); font-size: 40px;">Dasar HTML</h1>
            <div style="padding: 10px 0 10px 0;">
                <h2>Apa itu HTML?</h2>
                <p>HTML atau Hypertext Markup Language adalah bahasa yang digunakan untuk merancang web. Dalam merencang web pertama kita akan membuat judul dan teks dalam web.</p>
                <h4>Membuat Judul</h4>
                <p>Judul dalam HTML menggunakan tag heading, yaitu <code>&lt;h1&gt;</code> hingga <code>&lt;h6&gt;</code>. Tag ini akan menentukan tingkat kepentingan dan ukuran judul.</p>
                <ul>
                    <li><code>&lt;h1&gt;</code> untuk judul utama halaman</li>
                    <li><code>&lt;h2&gt;</code> untuk subjudul utama</li>
                    <li><code>&lt;h3&gt;</code> untuk subjudul kedua</li>
                </ul>
                <ul>    
                    <h5>contoh:</h5>
                    <ol><code>&lt;h1&gt;</code>Judul Halaman<code>&lt;/h1&gt;</code></ol>
                    <ol><code>&lt;h2&gt;</code>Sub Judul Halaman<code>&lt;/h2&gt;</code></ol>
                </ul>

                <h4>Membuat Teks</h4>
                <p>Dalam membuat teks kita bisa mengunakan tag <code>&lt;p&gt;</code>. tag ini digunakan untuk membuat paragraf.</p>
                <ul>    
                    <h5>contoh:</h5>
                    <ol><code>&lt;p&gt;</code>Ini adalah paragraf pertama<code>&lt;/p&gt;</code></ol>
                    <ol><code>&lt;p&gt;</code>Ini adalah paragraf kedua<code>&lt;/p&gt;</code></ol>
                </ul>

                <h4>Format Teks</h4>
                <p>Dalam membuat teks pada html ada berbagai jenis format yang dapat kita gunakan, seperti:</p>
                <ul>
                    <li><code>&lt;b&gt;</code> atau <code>&lt;strong&gt;</code> untuk membuat teks tebal</li>
                    <li><code>&lt;i&gt;</code> atau <code>&lt;em&gt;</code> untuk membuat teks miring</li>
                    <li><code>&lt;u&gt;</code> atau <code>&lt;ins&gt;</code> untuk membuat teks garis bawah</li>
                    <li><code>&lt;s&gt;</code> atau <code>&lt;del&gt;</code> untuk mencoret teks</li>
                    <li><code>&lt;mark&gt;</code>untuk membuat marker</li>
                </ul>
                <ul>    
                    <h5>contoh:</h5>
                    <ol><code>&lt;p&gt;</code><code>&lt;b&gt;</code><b>Produk lokal</b><code>&lt;/b&gt;</code>adalah produk yang diproduksi di dalam negeri<code>&lt;/p&gt;</code></ol>
                    <ol><code>&lt;p&gt;</code><code>&lt;i&gt;</code><i>produk lokal adalah produk yang diproduksi di dalam negeri</i><code>&lt;/i&gt;</code><code>&lt;/p&gt;</code></ol>
                </ul>
                <a href="https://www.w3schools.com/html/html_headings.asp" class="logout-button" target="_blank">Selengkapnya...</a>
            </div>
        </div>
        <div class="right-side">
            <div class="image-top">
                <img src="images/materi1b.png" alt="Contoh Gambar Atas" style="width: 100%; height: auto;">
            </div>
            <div class="image-bottom">
                <img src="images/materi1a.png" alt="Contoh Gambar Bawah" style="width: 100%; height: auto;">
            </div>
        </div>
    </div>

    <audio autoplay loop hidden>
        <source src="bgm/bgm_menu.mp3" type="audio/mpeg">
    </audio>
</body>
</html>
