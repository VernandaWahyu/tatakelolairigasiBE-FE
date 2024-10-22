<?php
    include "koneksi.php";

    $query1="select * from logs ";		
	$result=mysqli_query($conn,$query1);
    $data= mysqli_fetch_array($result);
    $relay1=$data['relay1'];
    echo $relay1;
?>