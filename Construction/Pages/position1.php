<!DOCTYPE html>
<html>
<head>
<title>Position</title>
<style>
table {
border-collapse: collapse;
width: 85%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
.button {
  background-color: rgb(247, 7, 107); 
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin: 4px 2px;
  cursor: pointer;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
	<?php include("sections/side.html"); ?>

	<center><button><a href="poinsert.php" class="button"><span>Add Position</span></a></button></center><br><br>
	<hr style="border-top: 2px solid #7CFC00;"><br>
<table align="right">
<tr>
<th>SN</th>
<th>Position</th>
<th>Daily_sallary</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "building");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT pid, position, daily_rate FROM position";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["pid"]. "</td><td>" . $row["position"] . "</td>
<td>". $row["daily_rate"]. "</td>
</tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>