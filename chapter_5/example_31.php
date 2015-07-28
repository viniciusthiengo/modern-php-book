<?php
/**
 * Created by PhpStorm.
 * User: viniciusthiengo
 * Date: 7/3/15
 * Time: 10:09 AM
 */

    if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
        var_dump( $_POST );
    }
    else{
        $requestBody = '{"username":"Josh"}';
        $context = stream_context_create(array(
            'http'=>array(
                'method'=>'POST',
                'header'=>"Content-Type: application/json;charset=utf-8;\r\n"."Content-Length: ".mb_strlen($requestBody),
                'content'=>$requestBody
            )
        ));
        $response = file_get_contents('./example_31.php', false, $context);
        echo $response;
    }