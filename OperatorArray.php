<?php

$first = [
    "first_name" => "Eko"
];

$last = [
    "last_name" => "khannedy"
];

$full = $first + $last;
var_dump ($full);

$a = [
    "first_name" => "Eko" ,
    "last_name" => "khannedy"
];

$b= [
    
    "last_name" => "khannedy" ,
    "first_name"=> "Eko"
];

var_dump ($a == $b);
var_dump ($a === $b);