<?php
/**
 * Created by PhpStorm.
 * User: viniciusthiengo
 * Date: 7/23/15
 * Time: 2:56 PM
 */

class EchoData2 {
    public function setUp()
    {
        /*$handle = fopen('file.txt', 'a');
        fwrite($handle, 'setUp');
        fclose($handle);*/
    }

    public function perform()
    {
        // Work work work
        echo $this->args['name'];

        $handle = fopen('file'.rand(0,9999).'_2.txt', 'a');
        fwrite($handle, $this->args['name']);
        fclose($handle);

        //exit();
    }

    public function tearDown()
    {
        /*$handle = fopen('file.txt', 'a');
        fwrite($handle, 'tearDown');
        fclose($handle);*/
    }
}