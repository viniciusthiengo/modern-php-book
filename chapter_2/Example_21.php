<?php
    function encapsulateData($name, $enterprise){
        return(function($message) use ($name, $enterprise){
            return( sprintf('%s, %s, %s', $name, $enterprise, $message) );
        });
    }

    $name = 'Thiengo';
    $enterprise = 'Thiengo Inc.';
    $closure = encapsulateData($name, $enterprise);

    echo $closure('Test message');