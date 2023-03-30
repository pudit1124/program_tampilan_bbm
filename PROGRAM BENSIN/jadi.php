<!DOCTYPE html>
<html>
<head>
	<title>SPBU</title>
</head>
<body>
	<h2>Hasil Perhitungan Pengeluaran</h2>
	<?php
		$jarak_tempuh = $_POST["jarak_tempuh"];
		$berat = $_POST["berat"];
		$kecepatan = $_POST["kecepatan"];
		$waktu_tempuh = $jarak_tempuh / $kecepatan;
		$total_pengeluaran = $jarak_tempuh / 60 * 15000;
		$konsumsi_bensin = $jarak_tempuh /60;
		if ($berat <= 10){
			$Konsumsi_bensin_beban = $konsumsi_bensin + ($konsumsi_bensin*(3/100));
		}else {
			$Konsumsi_bensin_beban = $konsumsi_bensin + ($konsumsi_bensin*(6/100));
		}
		
		if ($waktu_tempuh <=10){
			$waktu_tempuh_beban = $waktu_tempuh + ($waktu_tempuh*(3/100));
		}else {
			$waktu_tempuh_beban = $waktu_tempuh + ($waktu_tempuh*(6/100));
		}
	
		echo "Jarak yang ditempuh adalah $jarak_tempuh /km";
		echo'<br>';
		echo "Berat beban yang dibawa sebesar $berat /kg";
		echo'<br>';
		echo "Kecepatan yang digunakan adalah $kecepatan km/jam";
		echo'<br>';
		echo "Diketahui 1 liter dapat menempuh jarak 60km";
		echo'<br>';
		echo "Diketahui 1 liter bensin seharga Rp. 15.000";
		echo'<br>';
		echo "Waktu tempuh yang dapat di lalui adalah $waktu_tempuh km/jam";
		echo'<br>';
		echo "Waktu tempuh yang dapat dilalui dengan beban $berat kg, adalah $waktu_tempuh_beban km/jam";
		echo'<br>';
		echo "Konsumsi bensin yang dibutuhkan tanpa beban adalah $konsumsi_bensin /liter";
		echo'<br>';
		echo "Konsumsi bensin yang dibutuhkan dengan beban yang dibawa sebesar $berat kg,";
		echo'<br>';
		echo "dengan ketentuan setiap 10kg beban yang dibawa akan ditambah 3% adalah $Konsumsi_bensin_beban /liter ";

	?>

</body>
</html>