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

    $log = new Logger('modern-php-book');
    $log->pushHandler( new StreamHandler('logs/production.log'. logger::WARNING) );

    $transport = \Swift_SmtpTransport::newInstance('smtp.gmail.com', 465)
        ->setUsername('thiengocalopsita@gmail.com')
        ->setPassword('Quimicamu1990');

    $mailer = \Swift_Mailer::newInstance($transport);

    $message = \Swift_Message::newInstance()
        ->setSubject('Website error!')
        ->setFrom( array('thiengocalopsita@gmail.com'=>'John Doe') )
        ->setTo( array('thiengocalopsita@gmail.com'=>'thiengo') );

    $log->pushHandler(new \Monolog\Handler\SwiftMailerHandler($mailer, $message, Logger::CRITICAL));
    $log->critical('The server is on fire!');



