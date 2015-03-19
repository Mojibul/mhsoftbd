<?php
/**
 * Created by PhpStorm.
 * User: john
 * Date: 3/19/2015
 * Time: 1:28 AM
 */

// INSERT INTO `tb_email`(`ref_id`, `name`, `email_id`) VALUES ([value-1],[value-2],[value-3])

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "backlinkDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO tb_email (name)
VALUES ('John')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
