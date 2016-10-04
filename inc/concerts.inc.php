<ul class="collapsible popout" data-collapsible="accordion">
<?php
include "dbinfo.inc.php";
$conn = mysqli_connect($servername, $username, $password, $dbname);

$query = mysqli_query($conn, "SELECT `start`,`info`,`end`,`location` FROM `Concerts` WHERE 1 ORDER BY `start`");

// Check connection
if (!$conn) {
	die("Error: 2\n" . mysqli_connect_error());
}
//print stuff
$activated=false;
$time = time();

for($i = 0; $i < mysqli_num_rows($query);$i++){
  $row = mysqli_fetch_row($query);

  $location = $row[3];

  $starttime = strtotime($row[0]);
  $endtime = strtotime($row[2]);

  $active = false;
  if($time < $endtime && !$activated){
    $active = true;
    $activated=true;
  }
	$date= date("F d, Y",$starttime);
  $strtime = date("g:i A",$starttime)." - ".date("g:i A",$endtime);
  echo("<li><div class=\"collapsible-header hoverable");
  if($active){
    echo(" active");
  }
  echo("\"><i class=\"material-icons\">send</i>".$date."</div>
  <div class=\"collapsible-body\"><br><center>Time:<br>".$strtime."<br><br>Location:<br>".$location."</center><br>".$row[1]."</div>
  </li>");
}
?>
</ul>
