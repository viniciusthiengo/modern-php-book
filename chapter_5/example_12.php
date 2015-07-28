<?php
/**
 * Created by PhpStorm.
 * User: viniciusthiengo
 * Date: 7/3/15
 * Time: 10:09 AM
 */

    $date = DateTime::createFromFormat('d\/m\/Y \à\s H:i:s', '15/08/1990 às 15:30:23');
    var_dump($date);
    echo '<br><br>';

    // EXAMPLE 13
    $datetime = new DateTime('2015-08-15 15:50:05');
    $interval = new DateInterval('P2W');
    $datetime->add( $interval );
    echo $datetime->format('Y-m-d H:i:s');
    echo '<br><br>';

    // EXAMPLE 14
    $dateStart = new \DateTime();
    $dateInterval = date_interval_create_from_date_string('-1 day'); //new \DateInterval::createFromDateString('-1 day');
    $datePeriod = new \DatePeriod($dateStart, $dateInterval, 3);

    foreach( $datePeriod as $date ){
        echo $date->format('Y-m-d') . PHP_EOL . '<br>';
    }

    echo '<br><br>';
    echo date('Y-m-d H:i:s');
    echo '<br>';
    date_default_timezone_set('UTC');
    echo date('Y-m-d H:i:s');