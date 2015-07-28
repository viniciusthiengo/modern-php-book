<?php
/**
 * Created by PhpStorm.
 * User: viniciusthiengo
 * Date: 7/1/15
 * Time: 2:40 PM
 */

require_once('../vendor/autoload.php');

$client = new \GuzzleHttp\Client();

//$objCsv = new SplFileInfo('../files/urls.csv');
$csv = \League\Csv\Reader::createFromPath('../files/urls.csv');
foreach( $csv as $csvRow ){
    try{
        $httpResponse = $client->options( $csvRow[0] );

        if( $httpResponse->getStatusCode() >= 400 ){
            throw new \Exception();
        }
    }
    catch( \Exception $e ){
        echo $csvRow[0] . PHP_EOL;
    }
}