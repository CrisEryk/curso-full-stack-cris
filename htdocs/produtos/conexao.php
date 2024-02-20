<?php
$conn = new MySQli('localhost','root','','produtos_full');

if($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
}
?>