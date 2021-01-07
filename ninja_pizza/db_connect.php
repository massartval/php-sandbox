<?php 

// connect to DB
$conn = mysqli_connect('localhost', 'becode', 'becode', 'ninja_pizza');
// check if connected 
if(!$conn){
    echo 'Connection error: ' . mysqli_connect_error();
}

?>