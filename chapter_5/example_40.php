<?php
/**
 * Created by PhpStorm.
 * User: viniciusthiengo
 * Date: 7/3/15
 * Time: 10:09 AM
 */

    require_once('../vendor/autoload.php');

    use Monolog\Logger;
    use Monolog\Handler\StreamHandler;



    set_exception_handler(function (Exception $e){
       echo '--> '.$e->getMessage().'<br>';
        //$e->
        // create a log channel
        $log = new Logger('Exception');
        $log->pushHandler(new StreamHandler('../logs/exception.log', Logger::ERROR));

        // add records to the log
        //$log->addWarning('Foo');
        $log->addError( $e->getCode().' | '.$e->getMessage().' | '.$e->getLine().' | '.$e->getFile().' | '.$e->getPrevious().' | '.$e->getTrace() );
    });

    set_error_handler(function($errno, $errstr, $errfile, $errline){
        if( !(error_reporting() & $errno) ){
            return;
        }
        throw new \ErrorException($errstr, $errno, 0, $errfile, $errline);
    });


    $whoops = new Whoops\Run();
    $whoops->pushHandler(new Whoops\Handler\PrettyPageHandler());
    $whoops->register();


    try{
        echo 'CODE<br>';

        10 / 0;

        throw new Exception('PDOException');
    }
    catch( PDOException $e ){
        echo $e->getCode().' - '.$e->getMessage().'<br>';
    }
    echo 'Continue<br>';


    restore_exception_handler();
    restore_error_handler();
