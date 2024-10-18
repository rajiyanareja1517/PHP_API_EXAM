<?php

    include '../../../config/config.php';

    header("Access-Control-Allow-Methods: PUT, PATCH");
    header("Content-Type:application/json");

    if($_SERVER['REQUEST_METHOD']=='PUT' || $_SERVER['REQUEST_METHOD']=='patch'){

        $config =  new Config();

        $input = file_get_contents("php://input");

        parse_str($input,$_UPDATE);
        
        $MovielD = $_POST['MovielD'];
        $Title = $_POST['Title'];
        $Genre = $_POST['Genre'];
        $Actor = $_POST['Actor'];
        $Director = $_POST['Director']; 
        $Language = $_POST['Language'];
         $Age_restrictions = $_POST['Age_restrictions'];
         $Duration = $_POST['Duration'];
         $Description = $_POST['Description'];

        $res = $config->update_MOVIE($Title, $Genre,$Actor,$Director,$Language,$Age_restrictions,$Duration,$Description,$MovielD);

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