<?php

    include '../../../config/config.php';

    header("Access-Control-Allow-Methods: POST");
    header("Content-Type: application/json");

    if($_SERVER['REQUEST_METHOD']=='POST'){

        $Amount = $_POST['Amount'];
        $Timestamp = $_POST['Timestamp'];
        $DiscountCode = $_POST['DiscountCode'];
        $TransactionNum = $_POST['TransactionNum']; 
        $ReservationID = $_POST['ReservationID'];
         $PaymentMethod = $_POST['PaymentMethod'];
    

        $config =  new Config();
        
        $res = $config->insertPAYMENT( $Amount, $Timestamp,$DiscountCode,$TransactionNum,$ReservationID,$PaymentMethod	);

        if($res){
            $arr['data'] = " Inserted Successfully...";
            http_response_code(201);
        }
        else{
            $arr['data'] = " Insertion failed...";
        }
    }
    else{
        $arr['error'] = "Only POST http request method in allowed...";
    }
    echo json_encode($arr);
?>