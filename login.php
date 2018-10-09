<form  method="POST">
	<center><table>
	<tr>
		<td></td><td><b>Login</b></td></td>
	</tr>
	<tr>
		<td>Nama</td><td><input type="text" name="nama"></td>
	</tr>
	<tr>
		<td>Password</td><td><input type="password" name="password"></td>
	</tr>
	<tr>
		<td><input type="submit" name="submit" value="submit"></td>
	</tr>
</table>
</form>

<?php
include "registrasi.php";
session_start();
$data = array(
			"username" => "yusril",
			"password" => "yusril"
		);
	if(isset($_POST['submit'])){
		$username = $_POST['nama'];
		$pass = $_POST['password'];
		
		if ($username == $data["username"] && $pass == $data["password"]){
			$_SESSION['username'] = $username;
			header("location:tampil.php");
		}
		else{
			header("location:login.php");
		}
	}
?>