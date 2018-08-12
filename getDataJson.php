<?php
$db_name = "dificam";
$mysql_user = "root";
$mysql_pass = "";
$server_name = "localhost";
$con = mysqli_connect($server_name,$mysql_user,$mysql_pass,$db_name);

$query = "select * from bobot";
$result = mysqli_query($con,$query);

$response = array();

while ($row = mysqli_fetch_array($result)) {
  // code...
  array_push($response,array('v0' =>$row[0] ,'v1' => $row[1] , 'v2' => $row[2], 'v3' => $row[3], 'v4' => $row[4], 'w' => $row[5]));
}
echo json_encode($response);

mysqli_close($con);

?>
