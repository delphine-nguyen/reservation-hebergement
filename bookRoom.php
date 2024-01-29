<?php

function cleanInput($input)
{
    $input = htmlspecialchars($input);
    return $input;
}

function generateRefReservation($name, $firstname)
{

    $refReservation = "R" . $name[0] . $firstname[0] . rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9);
    return $refReservation;
}

function checkDates($arrivalDate, $departureDate)
{
}

session_start();
$name = cleanInput($_POST["name"]);
$firstname = cleanInput($_POST["firstname"]);

$_SESSION["refReservation"] = generateRefReservation($name, $firstname);
$_SESSION["name"] = $name;
$_SESSION["firstname"] = $firstname;
$_SESSION["birthday"] = cleanInput($_POST["birthday"]);
$_SESSION["refSession"] = cleanInput($_POST["refSession"]);
$_SESSION["arrivalDate"] = cleanInput($_POST["arrivalDate"]);
$_SESSION["departureDate"] = cleanInput($_POST["departureDate"]);
$_SESSION["typeApt"] = cleanInput($_POST["typeApt"]);
header("Location: ./recap.php");
exit();
