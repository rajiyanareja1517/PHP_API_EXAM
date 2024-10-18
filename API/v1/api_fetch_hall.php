<?php

    include '../../../config/config.php';

    header("Access-Control-Allow-Methods: GET");
    header("Content-Type: application/json");

    if($_SERVER['REQUEST_METHOD']=='GET'){

        $config =  new Config();
        $res = $config->fetch_all_record_Hall();
        $all_records=[];

        while($record=mysqli_fetch_assoc($res)){
            array_push($all_records,$record);
        }
        echo json_encode($all_records);
    }
    else{
        $arr['error'] = "Only GET http request method in allowed...";
        echo json_encode($arr);
    }
    
?>