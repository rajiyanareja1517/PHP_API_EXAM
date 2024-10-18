<?php

    include '../../../config/config.php';

    header("Access-Control-Allow-Methods: POST");
    header("Content-Type: application/json");

    if($_SERVER['REQUEST_METHOD']=='POST'){

        $Name = $_POST['Name'];
        $Passward = $_POST['Passward'];
        $Email = $_POST['Email'];
        $Phone = $_POST['Phone']; 
    

        $config =  new Config();
        
        $res = $config->insertUSER( $Name, $Passward,$Email,$Phone	);

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