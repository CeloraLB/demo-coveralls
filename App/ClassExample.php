<?php

namespace App;

class ClassExample
{ 
    protected $options; 

    function __construct($options = []){
        $this->options = $options;
    }

    public function sum($numbers){
        return array_sum($numbers);
    }
}