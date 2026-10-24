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
    #omschrijving {
        height: 50px;
    }
</style>
<body>
    <?php
    $serietitle = $_POST['serietitle'];
    $serieawards = $_POST['serieawards'];
    $serieseasons = $_POST['serieseasons'];
    $seriecountry = $_POST['seriecountry'];
    $serielang = $_POST['serielang'];
    $serierating = $_POST['serierating'];
    $seriesummary = $_POST['seriesummary'];
    $serieid = $_POST['serieid'];
    ?>
    <a href="index.php">terug</a>
    <form action="index.php" method="post">
        <input type='hidden' name='Serieid' value="<?php echo $serieid ?>">
        <section>
            <div>Titel</div>
            <div><input type="text" name="Serietitle" value="<?php echo $serietitle; ?>"></div>
        </section>
        <section>
            <div>Awards</div>
            <div><input type="text" name="Serieawards" value="<?php echo $serieawards; ?>"></div>
        </section>
        <section>
            <div>Seasons</div>
            <div><input type="text" name="Serieseasons" value="<?php echo $serieseasons; ?>"></div>
        </section>
        <section>
            <div>Country</div>
            <div><input type="text" name="Seriecountry" value="<?php echo $seriecountry; ?>"></div>
        </section>
        <section>
            <div>Language</div>
            <div><input type="text" name="Serielang" value="<?php echo $serielang; ?>"></div>
        </section>
        <section>
            <div>Rating</div>
            <div><input type="text" name="Serierating" value="<?php echo $serierating; ?>"></div>
        </section>
        <section>
            <div>Omschrijving</div>
            <div><textarea id="omschrijving" name="Seriesummary"><?php echo $seriesummary; ?></textarea></div>
        </section>
        <button type="submit">opslaan</button>
</form>
</body>
</html>
