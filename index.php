<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="./assets/css/index.css">
    <link rel="stylesheet" href="./assets/css/theme.css">
    <title>Réservation</title>
</head>

<body class="secondaryColorBg">
    <header class="mainColorBg">
        <?php include("./header.php"); ?>
    </header>

    <main>
        <img src="./assets/img/cover.jpeg" alt="AFPA de Roubaix" class="cover">
        <h2 class="mainFont colorOnSecondaryBg">Réserver une chambre</h2>
        <form action="./findCenter.php" method="get" class="searchBarBig">
            <input type="text" name="nameCenter" class="mainFont">
            <button type="submit" class="mainFont">Rechercher</button>
        </form>
        <section class="errorMsg">
            <?php
            session_start();
            if (isset($_SESSION["errorMsg"]) && !empty($_SESSION["errorMsg"])) {
                echo "<p class='mainFont'>" . $_SESSION["errorMsg"] . "</p>";
            }
            ?>
        </section>
    </main>
    <footer class="mainColorBg mainFont">---</footer>
</body>

</html>