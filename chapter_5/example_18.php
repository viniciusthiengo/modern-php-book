<?php
/**
 * Created by PhpStorm.
 * User: viniciusthiengo
 * Date: 7/3/15
 * Time: 10:09 AM
 */

    require_once('../settings.php');
//print_r($settings);
    $postId = 105;
    $postTitle = "%Web%";

    try{
        $pdo = new PDO( sprintf('mysql:host=%s;dbname=%s;port=%s;charset=%s',
            $settings['host'],
            $settings['name'],
            $settings['port'],
            $settings['charset']),
            $settings['username'],
            $settings['password'] );
    }
    catch(PDOException $e){
        echo $e->getMessage();
        exit();
    }

    $sql = 'select * from th_post where title like :title';
    $statement = $pdo->prepare($sql);
    $statement->bindValue(':title', $postTitle, PDO::PARAM_STR);
    $statement->execute();
    //$results = $statement->fetchAll(PDO::FETCH_OBJ);

    //while( ($data = $statement->fetchObject()) !== false ){
    //foreach( $results as $data ){
    while( ($data = $statement->fetchColumn(0)) !== false ){
        //echo $data->title.'<br>';
        echo $data.'<br>';
    }