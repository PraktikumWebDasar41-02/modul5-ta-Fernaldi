<?php 
session_start();
include 'koneksi.php';
$nimm = $_SESSION['idie'];
$sql = mysqli_query($conn,"SELECT * FROM t_jurnal1 WHERE  NIM = '$nimm'");
if ($array=mysqli_fetch_array($sql)) {
	$nimm=$array['NIM'];
	$nama=$array['Nama'];	
	$emm=$array['Email'];	
	$tang=$array['Tgl_lahir'];	
	$jenisk=$array['Jenis_kelamin'];	
	$jurus=$array['Jurusan'];	
	$fakul=$array['Fakultas'];		
}else{echo "ERORR!!!";}
?>

<!DOCTYPE html>
<html>
<head>
	<title>View</title>
</head>
<body>
	<center>
		<form method="post">
			<table>
				<tr>
					<td>NIM :</td>
					<td><?php echo $nimm."<br>"; ?></td>
				</tr>
				<tr>
					<td>Nama :</td>
					<td><?php echo $nama."<br>"; ?></td>
				</tr>
				<tr>
					<td>Tanggal lahir :</td>
					<td><?php echo $tang."<br>"; ?></td>
				</tr>
				<tr>
					<td>Email :</td>
					<td><?php echo $emm."<br>"; ?></td>
				</tr>
				<tr>
					<td>Jenis kelamin :</td>
					<td><?php echo $jenisk."<br>"; ?></td>
				</tr>
				<tr>
					<td>Jurusan :</td>
					<td><?php echo $jurus."<br>"; ?></td>
				</tr>
				<tr>
					<td>Fakultas :</td>
					<td><?php echo $fakul."<br>"; ?></td>
				</tr>
				<tr>
					<td><input type="submit" name="masuk" value="Masukkan Baru"></td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>
<?php 
if (isset($_POST['masuk'])) {
	session_destroy();
	header("Location:Form.php");
}
 ?>