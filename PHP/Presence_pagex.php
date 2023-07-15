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
<div class="banner">
        <nav>
        <div class="navbar">
            <img src="../IMG/WPM_Logo_WhiteText.png" class="logo">
            <ul>
            <li><a href="Homepage.php">Home</a></li>
                <li><a href="Presence_page.php">Presence</a></li>
                <li><a href="Data_page copy.php">Data</a></li>
                <li><a href="about-us.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
                <div class="account" style="display: inline-block;" >
                    <li><a href="Function/logout.php">Log out</a></li>
                    <li><a href="Login.php">Log In</a></li>
                </div>
            </ul>
        </div>
        </nav>

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