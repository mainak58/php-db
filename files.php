<?php 
    include 'db.php';
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];

            $profilePhoto = $_FILES['profilePhoto']['name'];
            $file = $_FILES['profilePhoto']['tmp_name'];

            $folder = "uploads/" . $profilePhoto;
            
            move_uploaded_file($file, $folder);

            

            $sql = "INSERT INTO `test_28`(`id`, `name`, `email`, `phone`, `profilePhoto`) VALUES (null,'$name','$email','$phone','$profilePhoto')";

            if(mysqli_query($conn, $sql)){
                echo "Inserted successfully";
            }
            else{
                echo "Not inserted";
            }
?>