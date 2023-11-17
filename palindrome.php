<?php
function isPalindrome($string) {
    // Menghapus spasi dan mengubah ke huruf kecil agar tidak sensitif terhadap huruf besar/kecil
    $string = str_replace(' ', '', strtolower($string));

    // Mengubah string menjadi array karakter
    $characters = str_split($string);

    // Membalikkan urutan array karakter
    $reversed = array_reverse($characters);

    // Memeriksa apakah array awal sama dengan array yang dibalik
    $isPalindrome = ($characters == $reversed);

// Menampilkan	 hasil dengan var_dump
    var_dump($isPalindrome);
}

// Contoh penggunaan
$string1 = "radar";
$string2 = "hello";

echo "String 1: ";
isPalindrome($string1);

echo "String 2: ";
isPalindrome($string2);

$str = strtolower("1221");
$strArray = str_split($str);
$len = sizeof($strArray);
$reverseStr = array();
for($i=$len-1; $i>=0; $i--)
    $reverseStr[] .=$strArray[$i];
echo "$str is ".($strArray==$reverseStr ? "" : "not") . " a palindrome";
?>
