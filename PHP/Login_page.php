<?php 
    session_start();
    if(isset($_POST['login'])){
        $StuName = $_POST['StuName'];
        $StuNim = $_POST['StuNim'];
        if($StuName == "admin" && $StuNim == "admin"){
            $_SESSION['login'] = true;
            $_SESSION['name'] = "admin";
            header("Location: Data_page.php");
        }elseif($StuName == "mhs" && $StuNim == "mhs"){
            $_SESSION['login'] = true;
            $_SESSION['name'] = "mahasiswa";
            header("Location: Presence_page.php");
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>WPM | Login </title>
	<link rel="icon" href="../IMG/Main_Logo.png" type="image/x-icon">
	<link rel="stylesheet" href="../CSS/Login_page.css">
</head>
<body>
	<div class="center">
		<h1>Login</h1>
		<form method="post">
			<div class="txt_field">
				<input type="text" id="Student_Name" name="StuName"required>
				<span></span>
				<label>Username</label>
			</div>
			<div class="txt_field">
				<input type="password" id="Student_NIM" name="StuNim" required>
				<span></span>
				<label>Password</label>
			</div>
			<div class="pass"><!--Forgot Password?--></div>
			<!-- <input type="submit" name="login" value="Login"> -->
			<div class="subtombol">
				<button type="submit" name="login"><span></span>Enter</button>
				<button type="reset"><span></span>Clear</button>
            </div>
			<div class="signup_link">
				<!--Belum daftar? --><a href="#"><!--Daftar--></a>
			</div>
		</form>
	</div>
</body>
</html>