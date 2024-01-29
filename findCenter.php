<?php

function cleanInput($input)
{
    $input = htmlspecialchars($input);
    $input = strtolower($input);
    return $input;
}

if (isset($_GET["nameCenter"]) && !empty($_GET["nameCenter"])) {
    $nameCenter = cleanInput($_GET["nameCenter"]);
    $path = "./" . $nameCenter . ".php";
    if (file_exists($path)) {
        header("Location: ./$nameCenter.php");
    } else {
        session_start();
        $_SESSION["errorMsg"] = "Aucun centre trouvé";
        header("Location : ./index.php");
    }
    exit();
}
