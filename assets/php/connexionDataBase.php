<?php
$username_db = "root";
$password_db = "";
try {
    $mydb = new PDO('mysql:host=localhost;dbname=hibatallahcars',$username_db,$password_db);
    $mydb->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>