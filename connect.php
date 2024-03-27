<?php
// $conn = mysqli_connect("localhost", "root", "", "account") or die ("Error: " . mysqli_error($conn));

try {

    $serverName = "localhost";
    $user = "root";
    $pass = "";
    $dbName = "account";

    $conn = new PDO("mysql:host=$serverName;dbname=$dbName", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "done!";
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    
}
?>