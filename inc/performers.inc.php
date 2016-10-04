<?php
include "dbinfo.inc.php";
$conn = mysqli_connect($servername, $username, $password, $dbname);

$query = mysqli_query($conn, "SELECT `first name`,`last name`,`img`,`blurb` FROM `people` WHERE 1 ORDER BY `last name`");

// Check connection
if (!$conn) {
	die("Error: 2\n" . mysqli_connect_error());
}
//print stuff
for($i = 0; $i < mysqli_num_rows($query);$i++){
  $row = mysqli_fetch_row($query);
	echo "<div class=\"row\"><div class=\"col s3\"><img src=\"img/".$row[2]."\" style=\"width: 100%;\"></img></div><div class=\"col s9 flow-text\"><h1 class=\"header\" style=\"margin-top:0px\">".$row[0]." ".$row[1]."</h1>".$row[3]."</div></div>";
}
?>
