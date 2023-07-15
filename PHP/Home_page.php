<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WPM | Home</title>

    <!-- Logo -->
    <link rel="icon" href="../IMG/Main_Logo.png" type="image/x-icon">

    <!-- CSS -->
    <link rel="stylesheet" href="../CSS/Home_page.css" type="text/css">

</head>
<body>
    <header>
        <a href="#"><img class="logo" src="../IMG/WPM_Logo_WhiteText.png" alt="WPM (Website Presensi Mahasiswa)"></a>
            <nav>
                <a href="Home_page.php">Home</a>
                <a href="about-us.html">About us</a>
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
</body>
</html>