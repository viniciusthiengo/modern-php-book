<?php
/**
 * Created by PhpStorm.
 * User: viniciusthiengo
 * Date: 7/3/15
 * Time: 10:09 AM
 */

    $handle = fopen('php://filter/read=string.toupper/resource=../files/stream.txt', 'rb');
    //$handle = fopen('../files/stream.txt', 'rb');
    //stream_filter_append($handle, 'string.toupper');
    while( feof($handle) !== true ){
        echo fgets($handle);
    }
    fclose($handle);