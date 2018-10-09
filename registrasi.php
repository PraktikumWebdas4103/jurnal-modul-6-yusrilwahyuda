<?php
include "koneksi.php"
?>
<!DOCTYPE html>
<html>
<body><center>
	<form action="" method="POST">
		<table border="1">
			<tr>
				<td><center><h2>PENDAFTARAN</h2></td>
			</tr>
			<tr>
				<td>Nama</td><td><input type="text" name="nama" placeholder="nama" required maxlength="35"></td></tr><br><br>
			<tr>
				<td>Nim</td><td><input type="number" name="nim" placeholder="nim" required maxlength="10"></td></tr><br><br>
			 <tr>
			 	<td>Kelas</td>
			 	<td><input type="radio" name="kelas" value="D3MI4101" checked> D3MI4101<br>
  				<input type="radio" name="kelas" value="D3MI4102"> D3MI4102<br>
  				<input type="radio" name="kelas" value="D3MI4103"> D3MI4103<br>
  				<input type="radio" name="kelas" value="D3MI4104"> D3MI4104</td><br>
  			</tr>
  			 <tr>
			 	<td>Jenis Kelamin</td>
			 	<td><input type="radio" name="gender" value="Laki-laki" checked> Laki-laki <br>
  				<input type="radio" name="gender" value="Perempuan"> Perempuan</td><br>
  			</tr>
			<tr>
           		<td>Hobi</td>
				<td><input type="checkbox" name="hobi[]" value="Menulis">Menulis
				<input type="checkbox" name="hobi[]" value="Membaca">Membaca
				<input type="checkbox" name="hobi[]" value="Futsal">Futsal</td>
			</tr><br>
            <tr>
				<td>Fakultas</td><td>
                    <select name="fakultas">
                        <option value="Fakultas Ilmu Terapan">FAKULTAS ILMU TERAPAN</option>
                        <option value="Fakultas Komunikasi Bisnis">FAKULTAS KOMUNIKASI BISNIS</option>
                        <option value="Fakultas Ekonomi Bisnis ">FAKULTAS EKONOMI BISNIS</option>
                        <option value="Fakultas Industri Kreatif">FAKULTAS INDUSTRI KREATIF</option>
                        <option value="Fakultas Rekayasa Industri">FAKULTAS REKAYASA INDUSTRI</option>
                    </select>
                    </td>
                </tr>
                <tr>
                	<td>Alamat</td><td><textarea name="alamat" required></textarea></td>
            	</tr>
				<tr>
				<td></td>
				<td><input type="submit" name="submit" value="kirim"></td>
			</tr>
		</table>
	</form>
</body>
</html>