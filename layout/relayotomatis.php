<?php
// Koneksii
include "koneksi.php";

$stat =$_GET['stat'];
if($stat == 'ON'){
//Set data relay to 1
mysqli_query($conn,"UPDATE logs SET relayotomatis=1");
//Share response
echo "1";
}
else{
    //Set data relay to 0
mysqli_query($conn,"UPDATE logs SET relayotomatis=0");
//Share response
echo "0";
}

?>
