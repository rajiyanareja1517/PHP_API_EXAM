<?php

    include '../../../config/config.php';

    header("Access-Control-Allow-Methods: PUT, PATCH");
    header("Content-Type:application/json");

    if($_SERVER['REQUEST_METHOD']=='PUT' || $_SERVER['REQUEST_METHOD']=='patch'){

        $config =  new Config();

        $input = file_get_contents("php://input");

        parse_str($input,$_UPDATE);

        $PaymentiD = $_POST['PaymentiD'];
        $Amount = $_POST['Amount'];
        $Timestamp = $_POST['Timestamp'];
        $DiscountCode = $_POST['DiscountCode'];
        $TransactionNum = $_POST['TransactionNum']; 
        $ReservationID = $_POST['ReservationID'];
        $PaymentMethod = $_POST['PaymentMethod'];

        $res = $config->updatePAYMENT($Amount, $Timestamp,$DiscountCode,$TransactionNum,$ReservationID,$PaymentMethod,$PaymentiD);

        if($res==1){
            $arr['data']="Updated Successfully...";
        }
        else{
            $arr['data']="Updation failed...";
        }
    }
    else{
        $arr['error'] = "Only put and patch http request methods are allowed...";
    }
    echo json_encode($arr);
?>