<?php
	include "../PERT5/koneksi.php";
		$id_user = $_POST['id_user'];
		$nama_legkap = $_POST['nama_lengkap'];
		$email = $_POST['email'];
		$pass = md5($_POST[password]);
	$sql = "INSERT INTO users (id_user, password, nama, email) VALUES ('$id_user', '$pass', '$nama', '$email')";
	$query = mysqli_query($con, $sql);

	mysqli_close($con);

	header('location:tampil_user.php');
?>