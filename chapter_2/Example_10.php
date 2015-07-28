<?php
/**
 * Created by PhpStorm.
 * User: viniciusthiengo
 * Date: 6/22/15
 * Time: 8:39 AM
 */




require_once('../autoload.php');

use Book\ModernPHP\Add as Terta;



$add = new Terta(1, 65);
echo $add->getAdd();