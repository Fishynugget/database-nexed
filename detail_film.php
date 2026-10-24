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
    iframe {
        width: 300px;
        height: 200px;
        margin-top: 20px;
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
    $movietitle = $_POST['movietitle'];
    $movielength = $_POST['movielength'];
    $moviereleased = $_POST['moviereleased'];
    $moviecountry = $_POST['moviecountry'];
    $moviesum = $_POST['moviesum'];
    $movietrailer = $_POST['movietrailer'];
    $movieid = $_POST['movieid'];
    echo "<form action='edit_film.php' method='post'>
        <input type='hidden' name='movietitle' value='$movietitle'>
        <input type='hidden' name='movielength' value='$movielength'>
        <input type='hidden' name='moviereleased' value='$moviereleased'>
        <input type='hidden' name='moviecountry' value='$moviecountry'>
        <input type='hidden' name='moviesum' value='$moviesum'>
        <input type='hidden' name='movietrailer' value='$movietrailer'>
        <input type='hidden' name='movieid' value='$movieid'>
        <button type='submit'>edit</button>
    </form>";
    ?>
    <h1><?php echo $movietitle; ?></h1>
    <li>
        <section><div>information</div><div>information</div></section>
        <section><div>Length in minutes</div><div><?php echo $movielength; ?></div></section>
        <section><div>Release date</div><div><?php echo $moviereleased; ?></div></section>
        <section><div>Country of origin</div><div><?php echo $moviecountry; ?></div></section>
    </li>
    <h3>Beschrijving:</h3>
    <div><?php echo $moviesum; ?></div>
    <div><iframe src='https://www.youtube.com/embed/$movietrailer'></iframe></div>
</body>
</html>
