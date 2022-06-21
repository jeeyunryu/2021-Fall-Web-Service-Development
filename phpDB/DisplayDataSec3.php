<html>
<body>
Data Inserted </br>
Name    Address      Store </br>
<?php
$conn = new mysqli("localhost:3306", "root", "", "testdb");

$sql = "SELECT * FROM exercise3_sql";
$result = $conn->query($sql);

if (mysqli_num_rows($result) > 0) {
	while($row = $result->fetch_assoc()) {
		echo $row["name"] . " " . $row["address"] . " " . $row["store"] . "<br>";
	
	}
} else {
	echo "no data inserted";
}
	$conn->close();
?>
</br>
<a href="formDBSec3.html">Return to Form</a>
</body>
</html>