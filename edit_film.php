<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        background-color: rgb(24, 21, 60);
        color: white;
        display: flex;
        flex-direction: column;
        align-items: center;
        section {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
    }
    li {
        section {
            display: flex;
            flex-direction: row;
            width: 244px;
        }
        div {
            width: 120px;
            height: 30px;
            margin-right: 2px;
            margin-top: 2px;
            padding: 1%;
            background-color: rgba(133, 133, 133, 0.5);
        }
    }
    button {
        width: 120px;
        margin-right: 2px;
        margin-top: 2px;
        padding: 1%;
        background-color: rgba(133, 133, 133, 0.5);
        color: white;
        border: 0;
    }
    a {
        width: 120px;
        margin-right: 2px;
        margin-top: 2px;
        padding: 1%;
        background-color: rgba(133, 133, 133, 0.5);
        color: white;
        border: 0;
        text-decoration: none;
    }
</style>
<body>
    <?php
    $movietitle = $_POST['movietitle'];
    $movielength = $_POST['movielength'];
    $moviereleased = $_POST['moviereleased'];
    $moviecountry = $_POST['moviecountry'];
    $moviesum = $_POST['moviesum'];
    $movietrailer = $_POST['movietrailer'];
    $movieid = $_POST['movieid'];
    ?>
    <a href="index.php">terug</a>
    <form action="index.php" method="post">
        <input type='hidden' name='Movieid' value="<?php echo $movieid ?>">
        <section>
            <div>Titel</div>
            <div><input type="text" name="Movietitle" value="<?php echo $movietitle; ?>"></div>
        </section>
        <section>
            <div>Length in minutes</div>
            <div><input type="text" name="Movielength" value="<?php echo $movielength; ?>"></div>
        </section>
        <section>
            <div>Release date</div>
            <div><input type="text" name="Moviereleased" value="<?php echo $moviereleased; ?>"></div>
        </section>
        <section>
            <div>Country</div>
            <div><input type="text" name="Moviecountry" value="<?php echo $moviecountry; ?>"></div>
        </section>
        <section>
            <div>Summary</div>
            <div><input type="text" name="Moviesum" value="<?php echo $moviesum; ?>"></div>
        </section>
        <section>
            <div>Youtube trailer id</div>
            <div><textarea id="omschrijving" name="Movietrailer"><?php echo $movietrailer; ?></textarea></div>
        </section>
        <button type="submit">opslaan</button>
</form>
</body>
</html>
