<?php 

	$search_val = $_REQUEST["search_val"];

	//Database connection

	$host = "localhost";
	$username = "root";
	$pass = "";
	$dbname = "search";


	$conn = mysqli_connect($host,$username,$pass,$dbname);

	$sql = "SELECT * FROM search WHERE search_value LIKE '%$search_val%' ";

	$runQuery = mysql_query($conn,$sql);

	while($row = mysqli_fetch_array($runQuery)) {
		echo $row["search_value"] . "<br>";

	}
?>