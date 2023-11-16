<?php

//Array di php bisa berisikan kosong atau banyak (dinamis)
//panjang (length) array ada 10 dengan indeks 1 = 0
$values  = array (1, 2, 3, 4);
var_dump ($values);

$names = ["Vera", "Yanti", "Siregar"];
var_dump($names);

 $alamat = ["Hutapaung", ["Doloksanggul"]];
 var_dump ($alamat);
 var_dump($alamat[3]= "Parsingguran");
 
 $arr1 =  array(-3,-2,-1,0,1,2,3,5,6);
 var_dump ($arr1);
var_dump($arr1[6]= 8);

var_dump ($names[2]);

var_dump(count($arr1));

unset($names[3]);
var_dump($names);

$names[]= "Silali";
var_dump($names);

$eko = array (
    "id"=>"eko",
    "name"  => "Eko Kurniawan",
    "age" => "30"
);
var_dump($eko["id"]);

$regar = [
"id" => "regar",
"name"=>"Eko Regar" 
];
var_dump($regar);

$eko = array (
    "id" => "Eko",
    "name" => ["Eko Kurniawan",
    "age" => 30,
    "adress" => "Jakarta",
    "country" => "Indonesia"]
);
var_dump($eko);

$age = array (23, 35,26);
var_dump ($age);


$lenght = count($values);
echo $lenght;

//operasi array $array[index]= mengakses data di array pada nomor index, $array[index] = value, $array[]= value, unset($array[index]), count($array)












