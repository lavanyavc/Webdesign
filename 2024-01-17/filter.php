<?php
// Sanitize a String

// $a="<h1>Happy New year 2024!</h1>";
// $b=filter_var($a,FILTER_SANITIZE_STRING);
// echo $b;
// var_dump ($b);
// echo "<br>"

// Validate an Integer

// $c=50;
// var_dump ($c);

// if(filter_var($c,FILTER_VALIDATE_INT)){
//       echo $c." "."is an integer";
// }else{
//       echo $c." "."is not an integer";
// }
// echo "<br>"

// $d=0;
// var_dump($d);
// if(filter_var($d,FILTER_VALIDATE_INT)===0||!filter_var($d,FILTER_VALIDATE_INT)===false){
//       echo $d." "."is an integer";
// }else{
//       echo $d." "."is not an integer";
// }
// echo "<br>"

// Validate a float

// $e=95.5;
// var_dump($e);
// if(filter_var($e,FILTER_VALIDATE_FLOAT)){
//       echo $e." "."is a float number";
// }else {
//       echo $e." "."is not a float number";
// }

// Validate a IP address

// $f="192.168.1.6";
// var_dump($f);
// if(filter_var($f,FILTER_VALIDATE_IP)){
//       echo $f." ". "Valid IP address";
// }else{
//       echo $f." ". "Invalid Ip address";
// }

// Validate a Email

// $g="advithjune@email.com";
// var_dump($g);
// if(filter_var($g,FILTER_VALIDATE_EMAIL)){
//       echo $g." ". "is Valid E-mail ID";
// }else{
//       echo $g." ". "is Invalid E-mail ID";
// }

// Validate a URL

// $h="https://www.w3schools.com/react/default.asp";
// var_dump($h);
// if(filter_var($h,FILTER_VALIDATE_URL)){
//       echo $h." "."is valid URL";
// }else {
//       echo $h." "."is invalid URL";
// }

// 

$i=0;
$j=1;
$k="yes";
$l="no";
$m="on";
$n="off";
var_dump(filter_var($i,FILTER_VALIDATE_BOOLEAN));
// echo("<br>");
var_dump(filter_var($j,FILTER_VALIDATE_BOOLEAN));
var_dump(filter_var($k,FILTER_VALIDATE_BOOLEAN));
var_dump(filter_var($l,FILTER_VALIDATE_BOOLEAN));
var_dump(filter_var($m,FILTER_VALIDATE_BOOLEAN));
var_dump(filter_var($n,FILTER_VALIDATE_BOOLEAN));

$o="Happy";
var_dump(filter_var($o,FILTER_VALIDATE_BOOLEAN,FILTER_NULL_ON_FAILURE));


print("Hello World");


$num=51;
$result = ($num % 2==0) ? "Even Number" : "Odd Number";
echo $result;

?>