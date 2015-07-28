<?php
/**
 * Created by PhpStorm.
 * User: viniciusthiengo
 * Date: 7/3/15
 * Time: 1:16 AM
 */

namespace Thiengo\Scanner\Url;

class Scanner {
    protected $urls;
    protected $httpClient;


    public function __construct( array $urls ){
        $this->urls = $urls;
        $this->httpClient = new \GuzzleHttp\Client();
    }


    public function getInvalidUrls(){
        $invalidUtrls = [];
        foreach($this->urls as $url){
            try{
                $statusCode = $this->getStatusCodeForUrl( $url );
            }
            catch(\Exception $e){
                $statusCode = 500;
            }

            if( $statusCode == 400 ){
                array_push($invalidUtrls, ['url'=>$url, 'status'=>$statusCode]);
            }
        }
        return($invalidUtrls);
    }


    protected function getStatusCodeForUrl($url){
        $httpResponse = $this->httpClient->options($url);
        return( $httpResponse->getStatusCode() );
    }
}