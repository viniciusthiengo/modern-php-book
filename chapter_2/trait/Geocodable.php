<?php
/**
 * Created by PhpStorm.
 * User: viniciusthiengo
 * Date: 6/22/15
 * Time: 9:27 AM
 */

trait Geocodable {
    protected $address;
    protected $geocoder;
    protected $geocoderResult;

    public function setGeocoder(\Geocoder\GeocoderInterface $geocoder){
        $this->geocoder = $geocoder;
    }

    public function setAddress($address){
        $this->address = $address;
    }


    public function getLatitude(){
        if( isset( $this->geocoderResult ) === false ){
            $this->geocodeAddress();
        }
        return( $this->geocoderResult->getLatitude() );
    }


    public function getLongitude(){
        if( isset( $this->geocoderResult ) === false ){
            $this->geocodeAddress();
        }
        return( $this->geocoderResult->getLongitude() );
    }

    protected function geocodeAddress(){
        $this->geocoderResult = $this->geocoder->geocode($this->address);
        return(true);
    }
}