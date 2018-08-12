<?php
 require "config.php";
 $id = $_POST["id"];
 $id_pengguna = $_POST["id_pengguna"];
 $mean =  $_POST["mean"];
 $variance =  $_POST["variance"];
 $skewness =  $_POST["skewness"];
 $kurtosis = $_POST["kurtosis"];
 $entrophy = $_POST["entrophy"];

 $sql_query = "insert into tbl_pelatihan values ('$id','$id_pengguna','$mean','$variance','$skewness','$kurtosis','$entrophy')";

 $view="Select count(id) from tbl_pelatihan where id='$id'";
$resultt=mysqli_query($con,$view);
$row=mysqli_fetch_array($resultt,MYSQLI_NUM);


   $a=$row[0];

    if($a< 1)
    {
      $result = mysqli_query($con,$sql_query);

    }
    else
    {
    }
 ?>
