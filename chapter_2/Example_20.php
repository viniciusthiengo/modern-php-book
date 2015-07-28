<?php
    $arrayMapFuncion = array_map(function( $number ){
        return( $number + 1 );
    }, [1,2,3,4,5,6]);

    print_r( $arrayMapFuncion );