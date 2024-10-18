<?php

    include '../../../config/config.php';

    header("Access-Control-Allow-Methods: POST");
    header("Content-Type: application/json");

    if($_SERVER['REQUEST_METHOD']=='POST'){

        $Title = $_POST['Title'];
        $Genre = $_POST['Genre'];
        $Actor = $_POST['Actor'];
        $Director = $_POST['Director']; 
        $Language = $_POST['Language'];
         $Age_restrictions = $_POST['Age_restrictions'];
         $Duration = $_POST['Duration'];
         $Description = $_POST['Description'];

        $config =  new Config();
        
        $res = $config->insertMOVIE( $Title, $Genre,$Actor,$Director,$Language,$Age_restrictions,$Duration,$Description	);

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