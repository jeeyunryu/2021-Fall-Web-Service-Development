<html>
<body>

Welcome <?php echo $_POST["name"]; ?><br>
Your address is: <?php echo $_POST["address"]; ?> </br>
Your favorite store is: <?php echo $_POST["store"]; ?> </br>

<?php echo "database insertion <br> ";
$mysqli = mysqli_connect("localhost:3306", "root", "", "testdb");
if (mysqli_connect_errno()) {
	printf("Connect failed: %s\n", mysqli_connect_error());
	exit();
} else {
	$sql = "INSERT INTO exercise3_sql(name, address, store) VALUES ('".$_POST["name"]."','".$_POST["address"]."', '".$_POST["store"]."')";
	$res = mysqli_query($mysqli, $sql);
	if ($res == TRUE) {
		echo "A record for name, address, and store has been inserted.";
	} else {
		printf("Could not insert record: %s\n", mysqli_error($mysqli));
	}
	mysqli_close($mysqli);
}
?> </br>
<a href="formDBSec3.html">Home Site</a>

</body>
</html>