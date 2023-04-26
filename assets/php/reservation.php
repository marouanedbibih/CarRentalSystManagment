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
    if (isset($_POST['btn-reservation'])) {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            if (isset($_POST['first-name']) && isset($_POST['last-name']) && isset($_POST['client-phone'])  && isset($_POST['pickup-local']) && isset($_POST['drop-local']) && isset($_POST['pickup-date']) && isset($_POST['drop-date']) && isset($_POST['select-car']) && isset($_POST['configuration'])) {
                @include("./connexionDataBase.php");
                /* Personal Details*/
                $first_name = $_POST['first-name'];
                $last_name = $_POST['last-name'];
                $client_email = $_POST['client-email'];
                $client_phone = $_POST['client-phone'];

                /* Insertion Client*/
                $queryClient = "SELECT * FROM client WHERE first_name = :first_name AND last_name = :last_name  AND phone = :phone AND email = :email;";
                $statementClient = $mydb->prepare($queryClient);

                $statementClient->execute(
                    array(
                        'first_name'     =>     $_POST["first-name"],
                        'last_name'     =>     $_POST["last-name"],
                        'phone'     =>     $_POST["client-phone"],
                        'email'     =>     $_POST["client-email"]
                    )
                );
                $countClient = $statementClient->rowCount();

                $client = array();

                if ($countClient > 0) {
                    /*ID Client */
                    $client = $statementClient->fetchAll();
                    $client_id =$client[0][0];
                } else {
                    $dataClient = [$first_name, $last_name, $client_phone, $client_email];
                    $queryInertClient = "INSERT INTO client (first_name, last_name, phone, email)
                    VALUES (?,?,?,?)";
                    $stmtClient = $mydb->prepare($queryInertClient);
                    $stmtClient->execute($dataClient);

                    $query_client_id = "SELECT id FROM client WHERE first_name = :first_name AND last_name = :last_name  AND phone = :phone AND email = :email;";
                    $statement_client_id = $mydb->prepare($query_client_id);
    
                    $statement_client_id->execute(
                        array(
                            'first_name'     =>     $_POST["first-name"],
                            'last_name'     =>     $_POST["last-name"],
                            'phone'     =>     $_POST["client-phone"],
                            'email'     =>     $_POST["client-email"]
                        )
                    );

                    /*ID Client */
                    $client = $statement_client_id->fetchAll();
                    $client_id = $client[0][0];
                    
                }
                /*Booking Details */

                $pickup_local = $_POST['pickup-local'];
                $drop_local = $_POST['drop-local'];

                $pickup_date = $_POST['pickup-date'];
                $drop_date = $_POST['drop-date'];

                $select_cars = $_POST['select-car'];
                $config_cars = $_POST['configuration'];

                $text = $_POST['text-reservation'];

                /*Booking Insertion */

                $dataBooking = [$pickup_local, $drop_local, $pickup_date, $drop_date, $select_cars, $config_cars, $text,$client_id];
                $queryInsertBooking = "INSERT INTO reservation (pickup_location, drop_location, pickup_date, drop_date, car_type, configuration, text_message,id_client)
                VALUES (?,?,?,?,?,?,?,?);";
                $stmtBooking = $mydb->prepare($queryInsertBooking);
                $stmtBooking->execute($dataBooking);
                echo "<h1>Reservation Success </h1>";
            }
        }
    }
    ?>
</body>

</html>