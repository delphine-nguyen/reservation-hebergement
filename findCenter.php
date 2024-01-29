<?php

function cleanInput($input)
{
    $input = htmlspecialchars($input);
    $input = strtolower($input);
    return $input;
}

if (isset($_GET["nameCenter"]) && !empty($_GET["nameCenter"])) {
    $nameCenter = ucfirst(cleanInput($_GET["nameCenter"]));
    session_start();
    $_SESSION["centerName"] = $nameCenter;

    if ($nameCenter == "") {
        header("Location: ./index.php");
        exit();
    } else {
        header("Location: ./formReservation.php");
        exit();
    }
}
