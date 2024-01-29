<?php

function cleanInput($input)
{
    $input = htmlspecialchars($input);
    $input = strtolower($input);
    return $input;
}

if (isset($_GET["nameCenter"]) && !empty($_GET["nameCenter"])) {
    $nameCenter = cleanInput($_GET["nameCenter"]);
    session_start();
    $_SESSION["centerName"] = $nameCenter;
    $path = "./" . $nameCenter . ".php";
    header("Location: ./formReservation.php");
    exit();
}
