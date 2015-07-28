<?php
/**
 * Created by PhpStorm.
 * User: viniciusthiengo
 * Date: 7/3/15
 * Time: 10:09 AM
 */

$email = 'thiengocalopsoiat@gmail.com';
$isEmail = filter_var($email, FILTER_VALIDATE_EMAIL);
if( $isEmail !== false ){
    echo 'Success';
}
else{
    echo 'Fail';
}