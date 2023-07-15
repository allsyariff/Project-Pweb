<?php 
    include "Function/connect.php";
    include "Function/function.php";
    session_start();
    if($_SESSION['login'] == false){
        echo "
            <script>
                alert('Anda Belum Login');
                document.location.href = 'Login.php';
            </script>;
        ";
    }
    $presensiMhs = query("SELECT * FROM presensi");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WPM | Presence</title>
    <link rel="icon" href="../IMG/Main_Logo.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="../CSS/Data_page.css">
</head>
<body>
<div class="banners">
        <header>
            <a href="#"><img class="logo" src="../IMG/WPM_Logo_WhiteText.png" alt="WPM (Website Presensi Mahasiswa)"></a>
                <nav>
                    <a href="Data_page copy.php">Data</a>
                    <a href="Home_page.php">Home</a>
                    <a href="about-us.html">About</a>
                    <a href="Presence_page.php">Presence</a>
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
        
        <!-- <nav>
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
                </div>
            </ul>
        </div>
        </nav> -->

            <div class="content">
            <a href="Presence_page.php" class="tambah">Tambah</a>
    <table border="1">
        <tr>
            <th width="150">Nama Mahasiswa</th>
            <th width="150">NIM Mahasiswa</th>
            <th width="150">Mata Kuliah</th>
            <th width="150">Dosen</th>
            <th width="150">Presensi</th>
            <th colspan="5">Operation</th>
        </tr>
        <?php foreach($presensiMhs as $row):?>
            <tr>
                <td><?= $row['nama']?></td>
                <td><?= $row['nim']?></td>
                <td><?= $row['mata_kuliah']?></td>
                <td><?= $row['dosen']?></td>
                <td><?= $row['presensi']?></td>
                <td>
                    <a href="Update.php?id=<?= $row['id_presensi']?>"><img  class="tombol" src="../IMG/Edit.png"></a>
                    <a href="Function/Delete.php?id=<?= $row['id_presensi']?>"><img  class="tombol" src="../IMG/Delete.png"></a>
                </td>
            </tr>
        <?php endforeach;?>
    </table>
                     </div>
    </div>
</body>
</html>