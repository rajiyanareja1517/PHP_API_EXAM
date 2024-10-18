<?php

    include '../../../config/config.php';

    header("Access-Control-Allow-Methods: DELETE");
    header("Content-Type: application/json");

    if($_SERVER['REQUEST_METHOD']=='DELETE'){

        $config =  new Config();

        $input = file_get_contents("php://input");

        parse_str($input,$_DELETE);

        $id=$_DELETE['HallD'];

        $res = $config->delete_record_Hall($id);

        if($res==1){
            $arr['data']=" Deleted Successfully...";
        }
        else{
            $arr['data']=" Deletion failed...";
        }
    }
    else{
        $arr['error'] = "Only DELETE http request method in allowed...";
    }
    echo json_encode($arr);
?>