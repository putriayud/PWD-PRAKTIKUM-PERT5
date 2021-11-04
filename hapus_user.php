<?php
	include "../PERT5/koneksi.php";
	$sql="delete from users where id_user='$_GET[id]'";
	mysqli_query($con, $sql);

	header('location:tampil_user.php');
?>