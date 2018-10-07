<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
<form method="POST">
	<table>
		<tr>
			<td>NIM : </td>
			<td><input type="text" name="nim"></td>
		</tr>
		<tr>
			<td>Nama: </td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>Email: </td>
			<td><input type="text" name="email" placeholder="contoh@gmail.com"></td>
		</tr>
		<tr>
			<td>Tanggal Lahir: </td>
			<td><input type="date" name="date"></td>
		</tr>
		<tr>
			<td>Jenis Kelamin: </td>
			<td><input type="radio" name="jeniskelamin" value="Laki-Laki">Laki-laki <br>
				<input type="radio" name="jeniskelamin" value="Perempuan">Perempuan</td>
		</tr>
		<tr>
			<td>Program Studi: </td>
			<td><select name="pilih">
				<option>Pilih</option>
				<option value="Administrasi Bisnis">Administrasi Bisnis</option>
				<option value="Administrasi Publik">Administrasi Publik</option>
				<option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
				<option value="Akuntansi">Akuntansi</option>
			</select></td>
		</tr>
		<tr>
			<td>Fakultas: </td>
			<td><select name="pilihb">
				<option>Pilih</option>
				<option value="FEB">FEB</option>
				<option value="FKB">FKB</option>
			</select></td>
		</tr>
		<tr>
			<td><input type="submit" name="kirim" value="SUBMIT"></td>
		</tr>
	</table>
</form>
</body>
</html>


<?php 
include 'koneksi.php';
	if (isset($_POST['kirim'])) {
	
		if (strlen($_POST['nim']) == 10 && $_POST['nim']!="" && is_numeric($_POST['nim'])){
			$dt = $_POST['nim'];}
			else{echo "Masukkan 10 Angka!";}
		if (strlen($_POST['nama'])>20 || $_POST['nama']==""){
			echo "Nama Anda Kurang!";}
			else{ $nm = $_POST['nama'];}
		if (!strpos($_POST['email'], "@")||!strpos($_POST['email'], ".com")){
			echo "Email anda tidak cocok!";}
		else{$eml = $_POST['email'];}

	$tanggal = $_POST['date'];
	$opsi1 = $_POST['pilih'];
	$opsi2 = $_POST['pilihb'];
	if (isset($_POST['jeniskelamin'])) {
		$jk = $_POST['jeniskelamin'];	
	}
	
	
	if (isset($dt)& 
		isset($nm)&&
		isset($eml)&&
		isset($tanggal)&&
		isset($opsi1)&&
		isset($opsi2)&&
		isset($jk)) {

		session_start();
		$_SESSION['idie'] = $dt;		
		$sql = mysqli_query($conn,"INSERT INTO t_jurnal1(NIM, Nama, Email, Tgl_lahir, Jenis_kelamin, Jurusan, Fakultas) VALUES ('$dt','$nm','$eml','$tanggal','$jk','$opsi1','$opsi2')");

		$syntax = mysqli_query($conn,"SELECT * FROM t_jurnal1 ");
		$array =mysqli_fetch_array($syntax);
	if (isset($sql)) {
		echo "Data Anda Berhasil Di Input";
		header ("Location:View.php");
		}else{
			echo "Data Tidak Dapat Disimpan!";
		}
	}
}
 ?>