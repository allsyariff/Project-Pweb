<?php 
    include "Function/connect.php";
    require "Function/function.php";
    session_start();
    if($_SESSION['login'] == false && ($_SESSION['name'] == "admin") == false){
        echo "
            <script>
                alert('Anda Bukan Admin');
                window.location.href = 'Data_page.php';
            </script>
        ";
    }
    if(isset($_POST['tambah'])){
        if(tambah($_POST)){
            echo "
                <script>
                    alert('Data Berhasil ditambah');
                    window.location.href = 'Data_page.php';
                </script>
            ";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WPM | Presence</title>
    <link rel="icon" href="../IMG/Main_Logo.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="../CSS/Presence_page.css">
</head>
<body>
    <header>
        <a href="#"><img class="logo" src="../IMG/WPM_Logo_WhiteText.png" alt="WPM (Website Presensi Mahasiswa)"></a>
            <nav>
                <a href="Presence_page.php">Presence</a>
                <a href="about-us.html">About us</a>
                <a href="Home_page.php">Home</a> 
                <a href="Data_page.php">Data</a>
                <a href="contact.html">Contact</a>
                <a href="Function/logout.php">Log out</a>
                <div class="animation start-home"></div>
            </nav>
    </header>
    <section class="banner"></section>
    <script type="text/javascript">
        window.addEventListener("scroll", function(){
            var header = document.querySelector("header");
            header.classList.toggle("sticky", window.scrollY > 0);
        })
    </script>

        <form action="" method="post">
            <div class="content">
                <div class="Title">
                    <p>PRESENCE HERE</p>
                </div>
                <p>Fill the data below, and click enter to presence</p>

                <div class="container">
                    <div class="kolom">
                        <label for="name">Nama</label>
                        <br>
                        <input class="input_kanan" type="text" name="nama" placeholder="Masukkan Nama"><br>
                        <br>
                        <label for="nim">NIM</label>
                        <br>
                        <input class="input_kiri" type="text" name="nim" placeholder="Masukkan NIM"><br>
                        <br>
                    </div>

                    <div class="kolom">
                        <label for="mataKuliah">Mata Kuliah</label>
                        <br>
                        <input class="input_kanan" type="text" name="mataKuliah" placeholder="Masukkan Mata Kuliah"><br>
                        <br>
                        <label for="dosen">Dosen</label>
                        <br>
                        <input class="input_kiri" type="text" name="dosen" placeholder="Masukkan Dosen"><br>
                        <br>
                    </div>
                </div>

                <div class="keterangan">
                    <label for="presensi">Keterangan</label>
                    <br>
                    <select name="presensi" id="">
                        <option value="hadir">Hadir</option>
                        <option value="Izin">Izin</option>
                        <option value="absen">Absen</option>
                    </select>
                </div>

                <div class="add">
                    <button type="submit" name="tambah"><span></span>Add</button> 
                </div>
            </div>

            
        </form>
    </div>
</body>
</html>