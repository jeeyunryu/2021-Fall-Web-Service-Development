<html>
<body>
Favorite Store</br>
Favorite Store for 

<?php
$conn = new mysqli("localhost:3306", "root", "", "testdb");

$sql = "SELECT * FROM exercise3_sql";
$result = $conn->query($sql);

if (mysqli_num_rows($result) > 0) {
	while($row = $result->fetch_assoc()) {
		echo "Favorite Store for " . $row["name"] . " is " . $row["store"] . "<br>";
	
	}
} else {
	echo "no data with matching name";
}
	$conn->close();
?>

<a href="formDBSec3.html">Return to Form</a> 


</body>
</html>