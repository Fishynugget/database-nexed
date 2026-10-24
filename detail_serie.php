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
    echo "<form action='edit_serie.php' method='post'>
        <input type='hidden' name='serietitle' value='$serietitle'>
        <input type='hidden' name='serieawards' value='$serieawards'>
        <input type='hidden' name='serieseasons' value='$serieseasons'>
        <input type='hidden' name='seriecountry' value='$seriecountry'>
        <input type='hidden' name='serielang' value='$serielang'>
        <input type='hidden' name='serierating' value='$serierating'>
        <input type='hidden' name='seriesummary' value='$seriesummary'>
        <input type='hidden' name='serieid' value='$serieid'>
        <button type='submit'>edit</button>
    </form>";
    ?>
    <h1><?php echo $serietitle; ?></h1>
    <li>
        <section><div>information</div><div>information</div></section>
        <section><div>Awards</div><div><?php echo $serieawards; ?></div></section>
        <section><div>Seasons</div><div><?php echo $serieseasons; ?></div></section>
        <section><div>Country</div><div><?php echo $seriecountry; ?></div></section>
        <section><div>Language</div><div><?php echo $serielang; ?></div></section>
        <section><div>Rating</div><div><?php echo $serierating; ?></div></section>
    </li>
    <h3>Beschrijving:</h3>
    <div><?php echo $seriesummary; ?></div>
</body>
</html>
