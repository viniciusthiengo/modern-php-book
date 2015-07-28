<?php
/**
 * Created by PhpStorm.
 * User: viniciusthiengo
 * Date: 7/23/15
 * Time: 10:50 AM
 */

    require '../vendor/autoload.php';
    require 'EchoData.php';
    //include

    date_default_timezone_set('GMT');
    Resque::setBackend('127.0.0.1:6379');

    $args = array(
        'name' => 'Thiengo'
    );
    $jobId = Resque::enqueue('default', 'EchoData', $args, true);
    echo "Queued job ".$jobId."<br><br>";
    $status = new Resque_Job_Status($jobId);
    if(!$status->isTracking()){
        die("Resque is not tracking the status of this job.\n");
    }
    echo $status.'<br><br>';
    $jobId = Resque::enqueue('cms26', 'EchoData2', $args);


    //exec('echo "create-file.php" | atnow');
    //exec('php "create-file.php" | atnow');
    echo 'file has being created <br><br>';

//Resque::pop('notification');
    echo Resque::size('default');
    print_r(Resque::queues());