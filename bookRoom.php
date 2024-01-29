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

function checkAge($birthday)
{
    $currentDate = date("Y-m-d");
    $currentDate = strtotime($currentDate);

    $birthday = strtotime($birthday);
    $age = ($currentDate - $birthday) / 31536000;  // Number of seconds in a year

    if ($birthday > $currentDate) {
        return "Veuillez rentrer une date de naissance valide.";
    } elseif ($age < 16) {
        return "Vous devez avoir minimum 16 ans pour intégrer l'AFPA.";
    }
    return "";
}

function checkDates($arrivalDate, $departureDate)
{
    $arrivalDate = strtotime($arrivalDate);
    var_dump($arrivalDate);
    $departureDate = strtotime($departureDate);
    if ($arrivalDate > $departureDate) {
        return "Veuillez entrer une date de départ postérieure à la date d'arrivée.";
    }
    return "";
}


session_start();
$centerName = $_SESSION["centerName"];

if (isset($_POST["name"]) && !empty($_POST["name"])) {
    $name = cleanInput($_POST["name"]);
    $_SESSION["name"] = $name;
} else {
    $_SESSION["errorMsg"] = "Veuillez renseigner votre nom.";
    header("Location: ./$centerName.php");
    exit();
}

if (isset($_POST["firstname"]) && !empty($_POST["firstname"])) {
    $firstname = cleanInput($_POST["firstname"]);
    $_SESSION["firstname"] = $firstname;
} else {
    $_SESSION["errorMsg"]  = "Veuillez renseigner votre prénom.";
    header("Location: ./$centerName.php");
    exit();
}

if (isset($_POST["birthday"]) && !empty($_POST["birthday"])) {
    $birthday = cleanInput($_POST["birthday"]);
    $_SESSION["birthday"] = $birthday;
    $errorMsg = checkAge($birthday);
    if ($errorMsg != "") {
        $_SESSION["errorMsg"] = $errorMsg;
        header("Location: ./$centerName.php");
        exit();
    }
} else {
    $_SESSION["errorMsg"]  = "Veuillez renseigner votre date de naissance";
    header("Location: ./$centerName.php");
    exit();
}

if (isset($_POST["arrivalDate"]) && !empty($_POST["arrivalDate"])) {
    $arrivalDate = cleanInput($_POST["arrivalDate"]);
    $_SESSION["arrivalDate"] = $arrivalDate;
} else {
    $_SESSION["errorMsg"]  = "Veuillez renseigner la date d'arrivée.";
    header("Location: ./$centerName.php");
    exit();
}

if (isset($_POST["departureDate"]) && !empty($_POST["departureDate"])) {
    $departureDate = cleanInput($_POST["departureDate"]);
    $_SESSION["departureDate"] = $departureDate;
} else {
    $_SESSION["errorMsg"]  = "Veuillez renseigner la date de départ.";
    header("Location: ./$centerName.php");
    exit();
}

if (isset($arrivalDate) && isset($departureDate)) {
    $errorMsg = checkDates($arrivalDate, $departureDate);
    if ($errorMsg != "") {
        $_SESSION["errorMsg"] = $errorMsg;
        header("Location: ./$centerName.php");
        exit();
    }
}

if (isset($_POST["refSession"]) && !empty($_POST["refSession"])) {
    $refSession = cleanInput($_POST["refSession"]);
} else {
    $_SESSION["errorMsg"]  = "Veuillez renseigner le numéro de votre session de formation.";
    header("Location: ./$centerName.php");
    exit();
}

if (isset($_POST["typeApt"]) && !empty($_POST["typeApt"])) {
    $_SESSION["typeApt"] = cleanInput($_POST["typeApt"]);
} else {
    $_SESSION["errorMsg"]  = "Veuillez renseigner le type de logement que vous souhaitez.";
    header("Location: ./$centerName.php");
    exit();
}

$_SESSION["refReservation"] = generateRefReservation($name, $firstname);


// header("Location: ./recap.php");
// exit();
