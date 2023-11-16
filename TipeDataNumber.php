<?php

echo "Decimal : " ;
var_dump(1234);
echo "Octal : " ;
var_dump(01234);

echo "Hesadecimal: "; 
var_dump (0x1A);

echo "Binary: "; 
var_dump (0B111111);

echo "Underscore in Number "; 
var_dump (1_241_241_241);

echo "Floating Point: "; 
var_dump (1.234);

echo "Floating Point dengan E notation Plus (1.7 x 1000) : "; 
var_dump (1.7e3);

Echo "Floating Point dengan E notation Plus (1.7 x 0,001) : "; 
var_dump (1.7e-3);

Echo "Underscore di Floating Point : "; 
var_dump (1_123.123);

Echo "Integer Overflow 32 Bit: ";
var_dump (2147483648);

Echo "Integer Overflow 64 Bit: ";
var_dump (9223372036854775808);