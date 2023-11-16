<?php

// data null adalah data kosong

$name= "Vera";
$name= null;

$age= null;

 echo "Name:";
 echo $name;
 echo "\n";

 echo "Age:";
 echo $age;
 echo "\n";

 //cara cek data nul atau tidak
 echo "is Name Null:";
 var_dump (is_null ($name));
 echo "\n";

 // cek data null kalo yakin ada
 is_null ($age);

 //data null akan eror ketika variabel tidak ada atau belum didefinisikan
 is_null ($tidakadas);

 //menghapus variabel
 $contoh = "Vera";
 unset($contoh);

 //cara aman mencek data null kalau blom yakin adas
 $contoh = "Kurniawan" ;
 $contoh = null;

var_dump (isset($contoh));

 

