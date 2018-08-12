<?php
$db_name = "dificam";
$mysql_user = "root";
$mysql_pass = "";
$server_name = "localhost";
$con = mysqli_connect($server_name,$mysql_user,$mysql_pass,$db_name);

$query = "select * from temp_y";
$result = mysqli_query($con,$query);

$response = array();

while ($row = mysqli_fetch_array($result)) {
  // code...
  array_push($response,array('y' =>$row[0] ,'t' => $row[1]));
}
echo json_encode($response);

mysqli_close($con);

?>
