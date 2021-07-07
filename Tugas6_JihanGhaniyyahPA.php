<!DOCTYPE html>

<html>
<head>
    <!-- Membuat judul website -->
	<title>Kalkulator</title>

    <!-- Mengarahkan css ke file Tugas6_JihanGhaniyyahPA -->
	<link rel="stylesheet" type="text/css" href="Tugas6_JihanGhaniyyahPA.css">

</head>

<body>
	<?php 
    // Men-trigger program ketika tombol Hitung ditekan
	if(isset($_POST['submit'])){
        // Menangkap inputan
		$bil1 = $_POST['bil1'];
		$bil2 = $_POST['bil2'];
		$operasi = $_POST['operasi'];
        // Melakukan percabangan kondisi switch case, jika operasi tambah maka hasil bil1+bil2 dan seterusnya
		switch ($operasi) {
			case 'tambah':
				$hasil = $bil1+$bil2;
			break;
			case 'kurang':
				$hasil = $bil1-$bil2;
			break;
			case 'kali':
				$hasil = $bil1*$bil2;
			break;
			case 'bagi':
				$hasil = $bil1/$bil2;
			break;			
		}
	}
	?>

	<div class="kalkulator">
		<h2 class="title">KALKULATOR</h2>
		<form method="post">
        <!-- Menggunakan tag table untuk merapikan tampilan -->
        <table>	
            <tr>
                <th>Bil 1: </th>
                <th><input type="text" name="bil1" class="bil"></th>
            </tr>	
            <tr>
                <th>Bil 2: </th>
                <th><input type="text" name="bil2" class="bil"></th>
            </tr>		
            <tr>
                <th>Operasi: </th>
                <th>
                    <select class="operasi" name="operasi">
                        <option value="tambah">+</option>
                        <option value="kurang">-</option>
                        <option value="kali">x</option>
                        <option value="bagi">/</option>
                    </select>
                </th>
            </tr>
            <tr>
                <th></th>
                <th><input type="submit" name="submit" value="Hitung" class="submit"></th>
                <th></th>
            </tr>
            <tr>
                <th>Hasil: </th>
                <th>
                    <!-- Menangkap data yang telah disubmit dan menampilkan hasil -->
                    <?php if(isset($_POST['submit'])){ ?>
			        <input type="text" value="<?php echo $hasil; ?>" class="bil">
		            <?php }else{ ?>
                    <!-- Jika form belum diisi, akan muncul value 0 -->
			        <input type="text" value="0" class="bil">
		            <?php } ?>
                </th>
            </tr>												
		</table>
        </form>	
	</div>
</body>
</html>