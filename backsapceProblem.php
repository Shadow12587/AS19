<?php 
//Made by Connor Gilbert
//Problem Decription Link: https://open.kattis.com/problems/backspace
$entry = fgets(STDIN);
$arr = str_split($entry);
$outputArr = array();
$output = "";

for ($x = 0; $x < strlen($entry); $x++) {
 if ($arr[$x] == "<") {
array_pop($outputArr);
 }   
 
 else {
array_push($outputArr, $arr[$x]);
 }

}

$output = implode("", $outputArr);

fprintf(STDOUT, "%s", $output);







