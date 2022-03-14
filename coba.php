<?php  

// menampilkan array

$datapaket = array(

            array("paket"=>"cuci mobil kecil","mobil"=>"suzuki karimun,toyota agya,swift,ayla,jazz","harga"=>40000),

            array("paket"=>"cuci mobil sedang","mobil"=>"crv,hrv,mobilio,civic","harga"=>45000),

            array("paket"=>"cuci mobil besar","mobil"=>"fortuner,pajero,rubicon","harga"=>50000),

            array("paket"=>"cuci mobil sangat besar","mobil"=>"alpard,lexus,vellfire","harga"=>55000)
        );

?>

<?php
if (isset($_GET['Input'])) {
	$nama = $_GET['nama'];
	echo "Nama Anda : <b>$nama</b>";
}
?>



<html>
	<head><title>Pengolahan Form</title></head>
	<body>
		<FORM ACTION="proses02.php" METHOD="POST" NAME="input">
			Nama Anda : <input type="text" name="nama"><br>
			<input type="submit" name="Input" value="Input">
		</FORM>
	</body>
</html>


x`