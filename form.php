<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
	<form method="POST" action="">
		<input type="text" name="nama" id="nama" placeholder="Inputkan nama"></input>
		<br>
		<input type="text" name="email" id="email" placeholder="Inputkan email"></input>
		<br>
		<textarea name="pesan" id="pesan" placeholder="Inputkan pesan"></textarea>
		<br>
		<button>Kirim</button>
	</form>

	<?php
		
		if(isset($_POST["nama"]) && $_POST["email"] && $_POST["pesan"]) {
			echo "<br>Nama : ".$_POST["nama"];
			echo "<br>Email : ".$_POST["email"];
			echo "<br>Pesan : ".$_POST		["pesan"];
		}
	?>
</body>
</html>