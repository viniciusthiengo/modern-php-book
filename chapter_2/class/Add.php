<?php
namespace Book\ModernPHP;
/**
 * Created by PhpStorm.
 * User: viniciusthiengo
 * Date: 6/20/15
 * Time: 12:54 PM
 */




    class Add {
        private $number1;
        private $number2;


        public function __construct($n1=0, $n2=0){
            $this->number1 = $n1;
            $this->number2 = $n2;
        }


        public function getAdd(){
            return( $this->number1 + $this->number2 );
        }
    }