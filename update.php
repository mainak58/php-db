<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "test";

    $conn = mysqli_connect($servername, $username, $password, $databaseName);
    
    $id = $_POST['id'];
    
    $update = "UPDATE `test_28` SET `id`='[value-1]',`name`='[value-2]',`email`='[value-3]',`phone`='[value-4]',`profilePhoto`='[value-5]' WHERE id = $id";

    mysqli_query($conn, $deleteData)

?>
