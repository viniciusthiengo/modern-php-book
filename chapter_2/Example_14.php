<?php
require_once('../autoload.php');
require_once('../vendor/autoload.php');

use Geocoder\HttpAdapter\CurlHttpAdapter;
use Geocoder\Provider\GoogleMapsProvider;
use Geocoder\Geocoder;

use Retail\Domain\RetailStore;


    $geocoderAdapter = new CurlHttpAdapter();
    $geocoderProvider = new GoogleMapsProvider( $geocoderAdapter );
    $geocoder = new Geocoder( $geocoderProvider );

    $store = new RetailStore();
    $store->setAddress( '420 9th Avenue, New York, NY 10001 USA' );
    $store->setAddress( 'Rua dos Bem-Te-Vis, 87, Morada de Laranjeiras, Serra, Espírito Santo, Brasil' );
    $store->setGeocoder( $geocoder );

    $latitude = $store->getLatitude();
    $longitude = $store->getLongitude();

    echo $latitude.':'.$longitude;