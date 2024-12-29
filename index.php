<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="files.php" method="post" enctype="multipart/form-data">
        <label for="name">Name</label>
        <input type="text" name="name" id='name'>
        <label for="email">email</label>
        <input type="text" name="email" id='email'>
        <label for="phone">phone</label>
        <input type="text" name="phone" id='phone'>
        <label for="profilePhoto">profilePhoto</label>
        <input type="file" name="profilePhoto" id='profilePhoto'>
        <input type="submit">
    </form>

    <?php

    include 'db.php';

        $data = "SELECT * FROM `test_28`";
        $result = mysqli_query($conn, $data);
        
        if (mysqli_num_rows($result) > 0) {

            echo "<table border='1'>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Profile Photo</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>";

            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["name"] . "</td>
                <td>" . $row["email"] . "</td>
                <td>" . $row["phone"] . "</td>
                <td><img src='uploads/" . $row["profilePhoto"] . "' width='100'></td>
                <td>
                    <form method='post' action='delete.php'>
                        <input type='hidden' name='id' value='" . $row["id"] . "'>
                        <button type='submit'>Delete</button>
                    </form>
                </td>
            </tr>";
    }
    
    echo "</tbody></table>";
        } else {
            echo "0 results";
        }
    ?>
</body>
</html>
