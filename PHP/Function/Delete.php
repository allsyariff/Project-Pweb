<?php 
    include "connect.php";
    require "function.php";
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
    if(delete($id)){
        echo "
            <script>
                alert('Berhasil Delete');
                window.location.href = '../Data_page.php';
            </script>;
        ";
    }
?>