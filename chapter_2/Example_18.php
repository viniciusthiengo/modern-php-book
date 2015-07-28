<?php
function openFile($fileName){
    $handle = fopen($fileName, 'rb');

    if( $handle == false ){
        throw new Exception();
    }

    while( feof($handle) === false ){
        yield fgetcsv($handle);
    }
    fclose($handle);
}


foreach( openFile('../files/rootkey.csv') as $value){
    print_r($value);
}