<?php
print_r($_POST);
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$phone1=$_POST["phone1"];
$phone2=$_POST["phone2"];
$phone3=$_POST["phone3"];
$sAddress=$_POST["sAddress"];
$Address2=$_POST["Address2"];
$city=$_POST["city"];
$SPR=$_POST["SPR"];
$PZ=$_POST["PZ"];
$country=$_POST["country"];
$fnameError="";
$lnameError="";
$phone1Error="";
$phone2Error = "";
$phone3Error = "";
$sAddressError = "";
$Address2Error = "";
$cityError = "";
$SPRError = "";
$PZError = "";
$countryError= "";

if (empty($_POST["fname"])) { 
	// echo "<br>First name required.";
    $fnameError="Required";
}

if (empty($_POST["lname"])) {
	// echo "<br>Last name required.";
    $lnameError="Required";
}
if (empty($_POST["phone1"])) {
	// echo "<br>Last name required.";
    $phone1Error="Required";
}
if (empty($_POST["phone2"])) {
	// echo "<br>Last name required.";
    $phone2Error="Required";
}
if (empty($_POST["phone3"])) {
	// echo "<br>Last name required.";
    $phone3Error="Required";
}
if (empty($_POST["sAddress"])) {
	// echo "<br>Last name required.";
    $sAddressError="Required";
}
if (empty($_POST["Address2"])) {
	// echo "<br>Last name required.";
    $Address2Error="Required";
}
if (empty($_POST["city"])) {
	// echo "<br>Last name required.";
    $cityError="Required";
}
if (empty($_POST["SPR"])) {
	// echo "<br>Last name required.";
    $SPRError="Required";
}
if (empty($_POST["PZ"])) {
	// echo "<br>Last name required.";
    $PZError="Required";
}
if (($_POST["country"]) == "") {
	// echo "<br>Last name required.";
    $countryError="Required";
}

if($fnameError || $lnameError || $phone1Error || $phone2Error || $phone3Error || $sAddressError || $Address2Error || $cityError || $SPRError || $PZError || $countryError ) { 
	header("Location: Assignment2Form.php?"
        . "fname=$fname"
        . "&" . "lname=$lname"
        . "&" . "phone1=$phone1"
        . "&" . "phone2=$phone2"
        . "&" . "phone3=$phone3"
        . "&" . "sAddress=$sAddress"
        . "&" . "Address2=$Address2"
        . "&" . "city=$city"
        . "&" . "SPR=$SPR"
        . "&" . "PZ=$PZ"
        . "&" . "country=$country"
        . "&" . "fnameError=$fnameError"
        . "&" . "lnameError=$lnameError"
        . "&" . "phone1Error=$phone1Error"
        . "&" . "phone2Error=$phone2Error"
        . "&" . "phone3Error=$phone3Error"
        . "&" . "sAddressError=$sAddressError"
        . "&" . "Address2Error=$Address2Error"
        . "&" . "cityError=$cityError"
        . "&" . "SPRError=$SPRError"
        . "&" . "PZError=$PZError"
        . "&" . "countryError=$countryError");
}