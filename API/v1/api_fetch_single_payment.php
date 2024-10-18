<?php

    include "../../../config/config.php";

    header("Access-Control-Allow-Methods: GET");
    header("Content-Type: application/json");

    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        $config = new Config();


        if(!empty($_GET['PaymentiD'])) {
            
            $PaymentiD = $_GET['PaymentiD'];
            $res = $config->fetch_single_PAYMENT($PaymentiD);
            $arr = mysqli_fetch_assoc($res);

        } else {
            $arr['warning'] = "Please enter id & try again later...";
        }
    } else{
        $arr['error'] = "Only GET http request method in allowed...";
    }
    echo json_encode($arr);

?>