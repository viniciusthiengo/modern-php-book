<?php
/**
 * Created by PhpStorm.
 * User: viniciusthiengo
 * Date: 7/3/15
 * Time: 9:54 AM
 */


$input = '<p><string>alert("Just a test, man!");</string></p>';
echo htmlentities($input, ENT_QUOTES, 'UTF-8');