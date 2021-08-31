<?php 
if(isset($_GET['pesan'])){
	if($_GET['pesan'] == "gagal"){
		echo "<b>Login gagal! username dan password salah!</b>";
	}else if($_GET['pesan'] == "logout"){
		echo "Anda telah berhasil logout";
	}else if($_GET['pesan'] == "belum_login"){
		echo "Anda harus login untuk mengakses halaman admin";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

</head>
<body>
	<div class="login">
	

		<form action="login.php" method="post">

        <div class="avatar">
            <i class="fa fa-user"></i>
        </div>
</br>
</br>
</br>

        <h3>silahkan masukkan 
        <p>username dan password</p></h3>

        <div class="box-login">
            <i class="fas fa-envelope-open-text"></i>
            <input type="text" name="username" placeholder="Username">
          </div>
            <div class="box-login">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" placeholder="Password">
        </div>		
			<div>
                 <input type="submit" name="login" value="LOGIN" class="btn-login">
			</div>
		</form>
	</div>
</body>

</html>

