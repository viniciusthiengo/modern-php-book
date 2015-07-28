<?php
/**
 * Created by PhpStorm.
 * User: viniciusthiengo
 * Date: 7/3/15
 * Time: 10:09 AM
 */

$email = 'john(.doe)@exa//mple.com';
if( filter_var($email, FILTER_SANITIZE_EMAIL) ){
    echo 'Success<br>';
}
else{
    echo 'Fail<br>';
}
$safeString = '-> '.filter_var($email, FILTER_SANITIZE_EMAIL);
echo $safeString . ' -> '.$email;