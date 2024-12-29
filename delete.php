<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "test";

    $conn = mysqli_connect($servername, $username, $password, $databaseName);
    
    $id = $_POST['id'];
    $deleteData = "DELETE FROM `test_28` WHERE id = $id";
    
    mysqli_query($conn, $deleteData)

?>
