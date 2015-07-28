<?php
/**
 * Created by PhpStorm.
 * User: viniciusthiengo
 * Date: 7/23/15
 * Time: 10:50 AM
 */

    sleep(5);

    $handle = fopen('file.txt', 'a');
    fwrite($handle, 'Test');
    fclose($handle);