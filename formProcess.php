<?php

print_r($_POST);
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$fnameError="";
$lnameError="";
if (empty($_POST["fname"])) {
    //echo "<br> First name required.";
    $fnameError = "Required";
}
    

if (empty($_POST["lname"])) {
    //echo "<br> Last name required."; 
    $lnameError = "Required";
}

if($fnameError || $lnameError) {
    header("Location: form.php?"
        . "fname=$fname"
		. "&" . "lname=$lname"
        . "&" . "fnameError=$fnameError"
		. "&" . "lnameError=$lnameError");
}
       