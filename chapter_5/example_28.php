<?php
/**
 * Created by PhpStorm.
 * User: viniciusthiengo
 * Date: 7/3/15
 * Time: 10:09 AM
 */

    try{
        $json = file_get_contents('http://api.flickr.com/feeds/photos_public.gne?format=json');
        echo $json;
        echo 'HHHHHH';
    }
    catch(\Exception $e){
        echo $e->getMessage();
    }


    try{
        //$handle = fopen('file://Applications/MAMP/htdocs/modern-php-book/chapter_5/files/stream.txt', 'r');
        $handle = fopen('../files/stream.txt', 'r');
        while( feof($handle) !== true ){
            echo fgets($handle).'<br><br>';
        }
        fclose($handle);
    }
    catch(\Exception $e){
        echo $e->getMessage();
    }