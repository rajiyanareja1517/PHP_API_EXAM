<?php

    include '../../../config/config.php';

    header("Access-Control-Allow-Methods: PUT, PATCH");
    header("Content-Type:application/json");

    if($_SERVER['REQUEST_METHOD']=='PUT' || $_SERVER['REQUEST_METHOD']=='patch'){

        $config =  new Config();

        $input = file_get_contents("php://input");

        parse_str($input,$_UPDATE);

        $HallD=$_UPDATE['HallD'];
        $HallNumber=$_UPDATE['HallNumber'];
        $SeatsAmount=$_UPDATE['SeatsAmount'];
      

        $res = $config->update_Hall($HallD, $HallNumber, $SeatsAmount);

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