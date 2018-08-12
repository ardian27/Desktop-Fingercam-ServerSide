<?php
 require "config.php";
 $id = $_POST["id"];
 $nama =  $_POST["nama"];
 $jk =  $_POST["jk"];
 $tgl_lahir =  $_POST["tgl_lahir"];
 $alamat =  $_POST["alamat"];


 $sql_query = "insert into tbl_pengguna values ('$id','$nama','$tgl_lahir','$jk','$alamat')";


 $view="Select count(id_pengguna) from tbl_pengguna where id_pengguna='$id'";
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
