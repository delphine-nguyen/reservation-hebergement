<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="./assets/css/theme.css">
    <title>Réservation</title>
</head>

<body>
    <header>
        <?php include("./header.php"); ?>
        <h1>Réserver une chambre</h1>
    </header>

    <main>
        <form action="./findCenter.php" method="get">
            <input type="text" name="nameCenter">
            <button type="submit">Rechercher</button>
        </form>
        <section class="errorMsg">
            <?php
            session_start();
            if (isset($_SESSION["errorMsg"]) && !empty($_SESSION["errorMsg"])) {
                echo "<p>" . $_SESSION["errorMsg"] . "</p>";
            }
            session_destroy();
            ?>
        </section>
    </main>
    <footer>---</footer>
</body>

</html>