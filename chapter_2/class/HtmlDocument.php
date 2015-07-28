<?php
namespace Document \ Domain;
use Document\DomainInterface\Documentable;

/**
 * Created by PhpStorm.
 * User: viniciusthiengo
 * Date: 6/22/15
 * Time: 8:26 AM
 */

class HtmlDocument implements Documentable {
    protected $url;

    public function __construct($url){
        $this->url = $url;
    }

    public function getId()
    {
        return( $this->url );
    }

    public function getContent()
    {
        $ch = curl_init();
        curl_setopt( $ch, CURLOPT_URL, $this->url );
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );
        curl_setopt( $ch, CURLOPT_CONNECTTIMEOUT, 3 );
        curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1 );
        curl_setopt( $ch, CURLOPT_MAXREDIRS, 3 );
        $html = curl_exec( $ch );
        curl_close( $ch );

        return( $html );
    }
}