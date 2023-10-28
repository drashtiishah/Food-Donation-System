<?php

// Connecting to the Database
$username = "root";
$password = "";
$servername = "localhost";
$db = "food-donation";

// Create a connection
$conn = mysqli_connect($servername, $username, $password,$db);

// Die if connection was not successful
// if ($conn) {
//         echo "Connection was successful";
//       
       
//     } 
// else {
//         die("Sorry we failed to connect: " . mysqli_connect_error());
//     }

?>