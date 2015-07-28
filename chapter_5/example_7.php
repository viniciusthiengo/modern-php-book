<?php
/**
 * Created by PhpStorm.
 * User: viniciusthiengo
 * Date: 7/3/15
 * Time: 10:09 AM
 */

    $password = '33189588';
    $password = password_hash($password, PASSWORD_DEFAULT, ['cost'=>12]);
    if( $password === false ){
        echo 'FAIL';
    }
    echo 'SUCCESS<br><br>';
    echo $password.'<br>';
    echo mb_strlen($password).'<br>';


    if( password_verify('33189588', $password) === false ){
        echo 'Login failed!<br>';
    }
    else{
        echo 'Login success!<br>';
    }


    $passwordNeedsRehash = password_needs_rehash($password, PASSWORD_DEFAULT, ['cost'=>15]);
    if( $passwordNeedsRehash === true ){
        $password = password_hash('33189588', PASSWORD_DEFAULT, ['cost'=>15]);
        echo 'New password generated<br>';
    }
    echo $password.'<br>';