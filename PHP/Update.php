<?php 
    include "Function/connect.php";
    require "Function/function.php";
    session_start();
    if($_SESSION['login'] == false && ($_SESSION['name'] == "admin") == false){
        echo "
            <script>
                alert('Anda Bukan Admin');
                window.location.href = '../Data_page.php';
            </script>
        ";
    }
    $id = $_GET['id'];
    $data = query("SELECT * FROM presensi WHERE id_presensi = $id")[0];
    if(isset($_POST['ubah'])){
        if(update($_POST)){
            echo "
                <script>
                    alert('Data Berhasil Diubah');
                    window.location.href = '../Data_page.php';
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
    <link rel="stylesheet"href="../CSS/update.css"/>
    <title>Update</title>
</head>
<body>
<header>
        <a href="#"><img class="logo" src="../IMG/WPM_Logo_WhiteText.png" alt="WPM (Website Presensi Mahasiswa)"></a>
            <nav>
                <a href="about-us.html">About us</a>
                <a href="Home_page.php">Home</a>
                <a href="Presence_page.php">Presence</a>
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
                    <p>EDIT DATA</p>
                </div>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $data['id_presensi'] ?>">
        <label for="name">Nama</label>
        <br>
        <input type="text" name="nama" placeholder="Masukkan Nama" value="<?= $data['nama'] ?>"><br>
        <label for="nim">NIM</label>
        <br>
        <input type="text" name="nim" placeholder="Masukkan NIM" value="<?= $data['nim'] ?>"><br>
        <label for="mataKuliah">Mata Kuliah</label>
        <br>
        <input type="text" name="mataKuliah" placeholder="Masukkan Mata Kuliah" value="<?= $data['mata_kuliah'] ?>"><br>
        <label for="dosen">Dosen</label>
        <br>
        <input type="text" name="dosen" placeholder="Masukkan Dosen" value="<?= $data['dosen'] ?>"><br>
        <label for="keterangan">Keterangan</label>
        <br>
        <select name="presensi" id="">
                        <option value="hadir">Hadir</option>
                        <option value="Izin">Izin</option>
                        <option value="absen">Absen</option>
                    </select>
                    <br>
                    <button type="submit" name="tambah"><span></span>Add</button>
    </form>
</body>
</html>