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

<body>
    <?php session_start(); ?>
    <header>
        <?php include("./header.php"); ?>
        <h1>Récapitulatif de la réservation n°<?php echo $_SESSION["refReservation"] ?></h1>
    </header>
    <main>

        <section id="recap">
            <article>
                <p>Nom</p>
                <p><?php echo $_SESSION["name"]; ?></p>
            </article>
            <article>
                <p>Prénom</p>
                <p><?php echo $_SESSION["firstname"]; ?></p>
            </article>
            <article>
                <p>Date de naissance</p>
                <p><?php echo $_SESSION["birthday"]; ?></p>
            </article>
            <article>
                <p>Numéro de session de formation</p>
                <p><?php echo $_SESSION["refSession"]; ?></p>
            </article>
            <article>
                <p>Date d'arrivée</p>
                <p><?php echo $_SESSION["arrivalDate"]; ?></p>
            </article>
            <article>
                <p>Date de départ</p>
                <p><?php echo $_SESSION["departureDate"]; ?></p>
            </article>
            <article>
                <p>Type de logement</p>
                <p><?php echo $_SESSION["typeApt"]; ?></p>
            </article>
        </section>
    </main>
</body>