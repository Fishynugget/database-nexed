<?php
$dbh = new PDO(
    'mysql:host=localhost;port:33060;dbname=netland',
    'bit_academy',
    'bit_academy'
);

$sql1 = "SELECT * FROM netland.series;";

$sth1 = $dbh->prepare($sql1);
if ($sth1->execute()) {
    echo " ";
} else {
    echo "failure";
}

$sql = "SELECT * FROM netland.movies;";

$sth = $dbh->prepare($sql);
if ($sth->execute()) {
    echo " ";
} else {
    echo "failure";
}

$currentSerie = isset($_GET['Serie']) ? $_GET['Serie'] : '';
$currentMovie = isset($_GET['Movie']) ? $_GET['Movie'] : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pdo</title>
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

    button {
        width: 120px;
        margin-right: 2px;
        margin-top: 2px;
        padding: 1%;
        background-color: rgba(133, 133, 133, 0.5);
        color: white;
        border: 0;
    }

    li {
        display: flex;
        width: 364px;

        section {
            width: 120px;
            margin-right: 2px;
            margin-top: 2px;
            padding: 1%;
            background-color: rgba(133, 133, 133, 0.5);
        }
    }

    form {
        display: flex;
    }
</style>
<body>
    <h1>Welkom op het netland beheerders paneel</h1>
    <section>
        <h3>series</h3>
        <section>
            <li>
                <form action="" method="get">
                    <?php
                    if (!empty($currentMovie)) {
                        echo "<input type='hidden' name='Movie' value='$currentMovie'>";
                    }
                    ?>
                    <button type="submit" name="Serie" value="title">Title</button>
                    <button type="submit" name="Serie" value="rating">Rating</button>
                    <section>Details</section>
                </form>
            </li>
            <?php
            if (isset($_POST['Serieid']) != null) {
                $Serieid = $_POST['Serieid'];
                $Serietitle = $_POST['Serietitle'];
                $Serieawards = $_POST['Serieawards'];
                $Serieseasons = $_POST['Serieseasons'];
                $Seriecountry = $_POST['Seriecountry'];
                $Serielang = $_POST['Serielang'];
                $Serierating = $_POST['Serierating'];
                $Seriesummary = $_POST['Seriesummary'];
                $sqlupdateserie = "UPDATE netland.series SET title = '$Serietitle', has_won_awards = '$Serieawards', seasons = '$Serieseasons'
                                    , country = '$Seriecountry', spoken_in_language = '$Serielang', rating = '$Serierating', summary = '$Seriesummary' WHERE id = '$Serieid';";

                $sthupdateserie = $dbh->prepare($sqlupdateserie);
                if ($sthupdateserie->execute()) {
                    echo " ";
                } else {
                    echo "failure";
                }
            }
            
            if (isset($_GET['Serie']) != false) {
                $selectSerie = $_GET['Serie'];
                if ($selectSerie == 'title') {
                    $serieSelected = trim($selectSerie, "'");
                } else if ($selectSerie == 'rating') {
                    $serieSelected = trim($selectSerie, "'");
                }

                $serieselect = "SELECT * FROM netland.series ORDER BY $serieSelected ASC;";

                $sth3 = $dbh->prepare($serieselect);
                if ($sth3->execute()) {
                    echo " ";
                } else {
                    echo "failure";
                }

                while ($rowserie = $sth3->fetch()) {
                    echo "<form action='detail_serie.php' method='post'>
                        <li>
                            <input type='hidden' name='serietitle' value='$rowserie[title]'>
                            <input type='hidden' name='serieawards' value='$rowserie[has_won_awards]'>
                            <input type='hidden' name='serieseasons' value='$rowserie[seasons]'>
                            <input type='hidden' name='seriecountry' value='$rowserie[country]'>
                            <input type='hidden' name='serielang' value='$rowserie[spoken_in_language]'>
                            <input type='hidden' name='serierating' value='$rowserie[rating]'>
                            <input type='hidden' name='seriesummary' value='$rowserie[summary]'>
                            <input type='hidden' name='serieid' value='$rowserie[id]'>
                            
                            <section>" . $rowserie['title'] . "</section>
                            <section>" . $rowserie['rating'] . "</section>
                            <button type='submit'>Bekijk details</button>
                        </li>
                    </form>";
                }
            } else {
                while ($rowserie = $sth1->fetch()) {
                    echo "<form action='detail_serie.php' method='post'>
                        <li>
                            <input type='hidden' name='serietitle' value='$rowserie[title]'>
                            <input type='hidden' name='serieawards' value='$rowserie[has_won_awards]'>
                            <input type='hidden' name='serieseasons' value='$rowserie[seasons]'>
                            <input type='hidden' name='seriecountry' value='$rowserie[country]'>
                            <input type='hidden' name='serielang' value='$rowserie[spoken_in_language]'>
                            <input type='hidden' name='serierating' value='$rowserie[rating]'>
                            <input type='hidden' name='seriesummary' value='$rowserie[summary]'>
                            <input type='hidden' name='serieid' value='$rowserie[id]'>
                            
                            <section>" . $rowserie['title'] . "</section>
                            <section>" . $rowserie['rating'] . "</section>
                            <button type='submit'>Bekijk details</button>
                        </li>
                    </form>";
                }
            }
            ?>
        </section>
        <button onclick=""></button>
    </section>
    <section>
        <h3>movies</h3>
        <section>
            <li>
                <form action="" method="get">
                    <?php
                    if (!empty($currentSerie)) {
                        echo "<input type='hidden' name='Serie' value='$currentSerie'>";
                    }
                    ?>
                    <button type="submit" name="Movie" value="title">Title</button>
                    <button type="submit" name="Movie" value="duur">Duur</button>
                    <button>Details</button>
                </form>
            </li>
            <?php
            if (isset($_POST['Movieid']) != null) {
                $Movietitle = $_POST['Movietitle'];
                $Movielength = $_POST['Movielength'];
                $Moviereleased = $_POST['Moviereleased'];
                $Moviecountry = $_POST['Moviecountry'];
                $Moviesum = $_POST['Moviesum'];
                $Movietrailer = $_POST['Movietrailer'];
                $Movieid = $_POST['Movieid'];
                $sqlupdatemovie = "UPDATE netland.movies SET title = '$Movietitle', length_in_minutes = '$Movielength'
                                    , released_at = '$Moviereleased', country_of_origin = '$Moviecountry', summary = '$Moviesum', youtube_trailer_id = '$Movietrailer' WHERE id = '$Movieid';";

                $sthupdatemovie = $dbh->prepare($sqlupdatemovie);
                if ($sthupdatemovie->execute()) {
                    echo " ";
                } else {
                    echo "failure";
                }
            }

            if (isset($_GET['Movie']) != false) {
                $selectMovie = $_GET['Movie'];
                if ($selectMovie == 'title') {
                    $movieSelected = trim($selectMovie, "'");
                } else if ($selectMovie == 'duur') {
                    $dezeheeftanderenaam = 'length_in_minutes';
                    $movieSelected = trim($dezeheeftanderenaam, "'");
                }

                $movieselect = "SELECT * FROM netland.movies ORDER BY $movieSelected ASC;";

                $sth4 = $dbh->prepare($movieselect);
                if ($sth4->execute()) {
                    echo " ";
                } else {
                    echo "failure";
                }

                while ($rowmovie = $sth4->fetch()) {
                    echo "<form action='detail_film.php' method='post'>
                        <li>
                            <input type='hidden' name='movietitle' value='$rowmovie[title]'>
                            <input type='hidden' name='movielength' value='$rowmovie[length_in_minutes]'>
                            <input type='hidden' name='moviereleased' value='$rowmovie[released_at]'>
                            <input type='hidden' name='moviecountry' value='$rowmovie[country_of_origin]'>
                            <input type='hidden' name='moviesum' value='$rowmovie[summary]'>
                            <input type='hidden' name='movietrailer' value='$rowmovie[youtube_trailer_id]'>
                            <input type='hidden' name='movieid' value='$rowmovie[id]'>
                            
                            <section>" . $rowmovie['title'] . "</section>
                            <section>" . $rowmovie['length_in_minutes'] . "</section>
                            <button type='submit'>Bekijk details</button>
                        </li>
                    </form>";
                }
            } else {
                while ($rowmovie = $sth->fetch()) {
                    echo "<form action='detail_film.php' method='post'>
                        <li>
                            <input type='hidden' name='movietitle' value='$rowmovie[title]'>
                            <input type='hidden' name='movielength' value='$rowmovie[length_in_minutes]'>
                            <input type='hidden' name='moviereleased' value='$rowmovie[released_at]'>
                            <input type='hidden' name='moviecountry' value='$rowmovie[country_of_origin]'>
                            <input type='hidden' name='moviesum' value='$rowmovie[summary]'>
                            <input type='hidden' name='movietrailer' value='$rowmovie[youtube_trailer_id]'>
                            <input type='hidden' name='movieid' value='$rowmovie[id]'>
                            
                            <section>" . $rowmovie['title'] . "</section>
                            <section>" . $rowmovie['length_in_minutes'] . "</section>
                            <button type='submit'>Bekijk details</button>
                        </li>
                    </form>";
                }
            }
            ?>
        </section>
        <button>voeg film toe</button>
    </section>
</body>
</html>