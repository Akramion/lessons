<?php 	

// \s \S- все пробелы, табуляции и переносы

// \w \W- все буквы и цифры

// \d \D- все цифры

// [2-6]

// ^ - начало строки 
// $ - конец строки
// | - или
// + - 1 или более
// * - 0 или более
// ? - 0 или 1

$res = preg_replace("#\+#", "!", "+++");

echo $res;



 ?>