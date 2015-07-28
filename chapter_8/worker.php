<?php
/**
 * Created by PhpStorm.
 * User: viniciusthiengo
 * Date: 7/23/15
 * Time: 10:50 AM
 */

    //putenv("nohup");
    putenv("VVERBOSE=1");
    putenv("LOGGING=1");
    //putenv("LOGGING=1");
    putenv("QUEUE=*");
    putenv("APP_INCLUDE=/Applications/MAMP/htdocs/modern-php-book/chapter_8/autoload.php");
    //putenv("APP_INCLUDE=/Applications/MAMP/htdocs/modern-php-book/chapter_8/EchoData2.php");
    require_once '../vendor/chrisboulton/php-resque/resque.php';

    //'VVERBOSE=1 LOGGING=1 nohup QUEUE=* APP_INCLUDE=/Applications/MAMP/htdocs/modern-php-book/chapter_8/autoload.php /Applications/MAMP/htdocs/modern-php-book/vendor/chrisboulton/php-resque/resque.php';
    //'sudo nohup QUEUE=* APP_INCLUDE=/Applications/MAMP/htdocs/modern-php-book/chapter_8/autoload.php /Applications/MAMP/htdocs/modern-php-book/vendor/chrisboulton/php-resque/resque.php';
    //'sudo nohup QUEUE=* autoload.php /../vendor/chrisboulton/php-resque/resque.php';
    //'QUEUE=* APP_INCLUDE=autoload.php ../vendor/chrisboulton/php-resque/resque.php &';