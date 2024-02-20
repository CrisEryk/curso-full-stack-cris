<?php
$conn = new MySQli('localhost','root','','bd');

if($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
}
?>