<?php  

// Establish a database connection  
$connect = mysqli_connect("localhost","root","","voting") or die("connection failed");

if($connect){
    echo "connected!";
}
else{
    echo "Not connected!";
}

?>  