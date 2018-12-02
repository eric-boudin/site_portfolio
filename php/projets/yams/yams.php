<!DOCTYPE html>
<html lang="en">
<?php
$racine="../../..";
$requete;
$bdd = new PDO('mysql:host=localhost;dbname=portfolio;charset=utf8', 'root', '');
$requete = $bdd->query('SELECT * FROM projets');
?>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Accueil</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo $racine ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo $racine ?>/css/1-col-portfolio.css" rel="stylesheet">
    <link href="<?php echo $racine ?>/css/perso/perso.css" rel="stylesheet">

</head>

<body class="fond">

<?php
include($racine . "/php/models/header.php");
?>

<!-- Page Content -->
<div class="container">

    <p>TAISTE</p>

</div>
<!-- /.container -->

<?php
include($racine . "/php/models/footer.php");
?>

<!-- Bootstrap core JavaScript -->
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
