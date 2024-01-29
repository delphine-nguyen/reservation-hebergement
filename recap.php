<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="./assets/css/theme.css">
    <link rel="stylesheet" href="./assets/css/recap.css">
    <title>Réservation</title>
</head>

<body class="secondaryCologBg">
    <?php session_start(); ?>
    <header class="mainColorBg">
        <?php include("./header.php"); ?>
        <h2 class="mainFont">Récapitulatif de la réservation n°<?php echo $_SESSION["refReservation"] ?></h2>
    </header>
    <main>

        <section id="recap">
            <article class="mainFont">
                <p>Centre</p>
                <p><?php echo $_SESSION["centerName"] ?></p>
            </article>
            <article class="mainFont">
                <p>Nom</p>
                <p><?php echo $_SESSION["name"]; ?></p>
            </article>
            <article class="mainFont">
                <p>Prénom</p>
                <p><?php echo $_SESSION["firstname"]; ?></p>
            </article>
            <article class="mainFont">
                <p>Date de naissance</p>
                <p><?php echo $_SESSION["birthday"]; ?></p>
            </article>
            <article class="mainFont">
                <p>Numéro de session de formation</p>
                <p><?php echo $_SESSION["refSession"]; ?></p>
            </article>
            <article class="mainFont">
                <p>Date d'arrivée</p>
                <p><?php echo $_SESSION["arrivalDate"]; ?></p>
            </article>
            <article class="mainFont">
                <p>Date de départ</p>
                <p><?php echo $_SESSION["departureDate"]; ?></p>
            </article>
            <article class="mainFont">
                <p>Type de logement</p>
                <p><?php echo $_SESSION["typeApt"]; ?></p>
            </article>
        </section>
    </main>
    <footer class="mainColorBg mainFont">---</footer>
</body>