<?php
function makeRange($length){
    $dataset = [];
    for($i = 0; $i < $length; $i++){
        $dataset[] = $i;
    }
    return( $dataset );
}

function makeRangeGenerator($length){
    for($i = 0; $i < $length; $i++){
        yield $i;
    }
}


function fibonnaci(){
    $last = 0;
    $current = 1;
    yield $current;
    while($current < 100000){
        $current = $last + $current;
        $last = $current - $last;
        yield $current;
    }
}


/*$dataset = makeRange(10000);
foreach($dataset as $value){
    echo $value, PHP_EOL;
}*/

/*foreach(makeRangeGenerator(1000000) as $value){
    echo $value, PHP_EOL;
}*/

foreach(fibonnaci() as $value){
    echo $value, PHP_EOL;
}