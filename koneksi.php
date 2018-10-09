<?php
 $hostname   	= "localhost";
 $username 		= "root";
 $pass     		= "";
 $db       		= "pendaftaran";
 $koneksi    	= new mysqli($hostname, $username, $pass, $db);

 if($koneksi==false){
  die("koneksi gagal". $koneksi->connect_error);
 }
  if (isset($_POST['submit'])) {
   $nama=$_POST['nama'];
   $nim=$_POST['nim'];
   $kelas=$_POST['kelas'];
   $jenisk=$_POST['gender'];
   $hobby = implode(", ", $_POST['hobi']);
   $fakultas=$_POST['fakultas'];
   $alamat=$_POST['alamat'];
 
 $sql="INSERT INTO pendaftaran (nama,nim,kelas,gender,hobi,fakultas,alamat) 
      VALUES ('$nama','$nim','$kelas','$jenisk','$hobby','$fakultas','$alamat')";
   if(mysqli_query($koneksi,$sql)){
    echo "Database Masuk";
   }else{
    echo "gagal konek";
   }
}
 ?>