<!DOCTYPE html>
<html>
<head>
	<title>Tampilan Database dari User Redlock</title>
	<style>
		body {
			background-color: white;
			color: black;
			font-family: Times New Roman, sans-serif;
			font-size: 18px;
			text-align: center;
		}
	h1 {
		margin-top: 50px;
		margin-bottom: 30px;
	}

	.row {
		display: flex;
		flex-direction: row;
		justify-content: center;
		align-items: center;
		margin-bottom: 20px;
	}

	.col {
		display: flex;
		flex-direction: column;
		justify-content: center;
		align-items: center;
		padding: 10px;
		width: 25%;
		margin: 10 10px;
	}

	.col:first-child {
		margin-left: 0;
	}

	.col:last-child {
		margin-right: 0;
	}

	.col h2 {
		margin: 0;
		font-size: 18px;
		font-weight: bold;
		color: black;
	}

	.col p {
		margin: 0;
		padding: 10px;
	}

	.col:nth-child() {
		background-color: white;
	}

</style>
</head>
<body>
	<h1>Tampilan Database dari User Redlock</h1>
	<?php
		// menghubungkan database dari file sql
		$servername = "mysql_db";
		$username = "root";
		$password = "jeselyn";
		$dbname = "Redlock";

	$conn = new mysqli($servername, $username, $password, $dbname);

	// cek koneksi berhasil/tidak
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT * FROM users";
	$result = $conn->query($sql);

	$printed_header = false;

	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			if (!$printed_header) {
				echo "<div class='row'><div class='col'><h2>ID</h2></div><div class='col'><h2>Nama</h2></div><div class='col'><h2>Alamat</h2></div><div class='col'><h2>Jabatan</h2></div></div>";
				$printed_header = true;
			}
			echo "<div class='row'><div class='col'><p>" . $row["ID"] . "</p></div><div class='col'><p>" . $row["Nama"] . "</p></div><div class='col'><p>" . $row["Alamat"] . "</p></div><div class='col'><p>" . $row["Jabatan"] . "</p></div></div>";
		}
	} else {
		echo "0 results";
	}
	$conn->close();
?>
</body>
</html>

