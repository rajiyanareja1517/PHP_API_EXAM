<?php

    include '../../../config/config.php';

    header("Access-Control-Allow-Methods: POST");
    header("Content-Type: application/json");

    if($_SERVER['REQUEST_METHOD']=='POST'){

        $NumberOfSeats = $_POST['NumberOfSeats'];
        $Paid = $_POST['Paid'];
        $Active = $_POST['Active'];
        $UserID = $_POST['UserID']; 
    

        $config =  new Config();
        
        $res = $config->insertSEAT_RESERVATION( $NumberOfSeats, $Paid,$Active	,$UserID	);

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