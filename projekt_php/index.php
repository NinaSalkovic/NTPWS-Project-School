<?php
include 'db_connect.php';
?>

<?php
$menu = isset($_GET['menu']) ? (int) $_GET['menu'] : 1;
?>

<!DOCTYPE html>
<html lang="hr">

<head>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="description" content="PHP project 24/25">
    <meta name="keywords" content="school, blog, project">
    <meta name="author" content="Nina Šalković">
    <title>PHP Projekt</title>
</head>

<body>
    <?php
    include 'header.php';
    include 'navbar.php';
    ?>
    <main>
        <?php
        if (isset($menu)) {
            switch ($menu) {
                case 1:
                    include 'content/pocetna.php';
                    break;
                case 2:
                    if (isset($_GET['clanak'])) {
                        $clanak = (int) $_GET['clanak'];
                        switch ($clanak) {
                            case 1:
                                include 'articles/article1.php';
                                break;
                            case 2:
                                include 'articles/article2.php';
                                break;
                            case 3:
                                include 'articles/article3.php';
                                break;
                            case 4:
                                include 'articles/article4.php';
                                break;
                            case 5:
                                include 'articles/article5.php';
                                break;
                            default:
                                include 'content/novosti.php';
                                break;
                        }
                    } else {
                        include 'content/novosti.php';
                    }
                    break;
                case 3:
                    include 'content/kontakt.php';
                    break;
                case 4:
                    include 'content/onama.php';
                    break;
                case 5:
                    include 'content/galerija.php';
                    break;
                case 6:
                    include 'registracija.php';
                    break;
                case 7:
                    include 'prijava.php';
                    break;
                default:
                    include 'content/pocetna.php';
                    break;
            }
        } else {
            include 'content/pocetna.php';
        }
        ?>
    </main>

    <?php include 'footer.php'; ?>
</body>

</html>';