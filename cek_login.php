<?php
	include "../PERT5/koneksi.php";
	$id_user = $_POST['id_user'];
	$pass = md5($_POST['paswd']);
	$sql = "SELECT * FROM users WHERE id_user='$id_user' AND password='$pass'";

	$login = mysqli_query($con, $sql);

	$ketemu = mysqli_num_rows($login);
	$r = mysqli_fetch_array($login);

	if($ketemu > 0){
		session_start();

		$_SESSION['iduser'] = $r['id_user'];
		$SESSION['passuser'] = $r['password'];

		echo"USER BERHASIL LOGIN<br>";
		echo "id user = ", $_SESSION['iduser'],"<br>";
		echo "password = ", $_SESSION['passuser'], "<br>";
		echo "<a href=logout.php><b>LOGOUT</b></a></center>";
	}
	else {
		echo "<center>Login gagal! username & passsword tidak benar <br>";
		echo "<a href=form_login.php><b>ULANGI LAGI</b></a></center>";
	}
	mysqli_close($con);
?>