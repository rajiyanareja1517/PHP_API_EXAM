<?php

    include "../../../config/config.php";

    header("Access-Control-Allow-Methods: GET");
    header("Content-Type: application/json");

    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        $config = new Config();


        if(!empty($_GET['ReservationID'])) {
            
            $PaymentiD = $_GET['ReservationID'];
            $res = $config->fetch_single_SEAT_RESERVATION($ReservationID);
            $arr = mysqli_fetch_assoc($res);

        } else {
            $arr['warning'] = "Please enter id & try again later...";
        }
    } else{
        $arr['error'] = "Only GET http request method in allowed...";
    }
    echo json_encode($arr);

?>