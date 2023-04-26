<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS-->
    <link href="./assets/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all" />
    <title>Document</title>
</head>

<body class="row justify-content-center">
    <?php


    ?>


    <?php

    if (isset($_POST['btn-contact'])) {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            if (isset($_POST['name_ct']) && isset($_POST['email_ct']) && isset($_POST['sbjc_ct']) && isset($_POST['message_ct'])) {
                @include("./connexionDataBase.php");

                // Récupération des données du formulaire
                $name = $_POST['name_ct'];
                $email = $_POST['email_ct'];
                $subject = $_POST['sbjc_ct'];
                $message = $_POST['message_ct'];

                // Insertion des données dans la base de données
                $stmt = $mydb->prepare("INSERT INTO contacts (name, email, subject, message) VALUES (?, ?, ?, ?)");
                $stmt->execute([$name, $email, $subject, $message]);
                echo "<h1>Message Send </h1>";
            }
        }
    }
    ?>
</body>

</html>