<!DOCTYPE html>
<html lang="en">
<?php
    $racine="..";
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
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/1-col-portfolio.css" rel="stylesheet">
    <link href="<?php echo $racine ?>/css/perso/perso.css" rel="stylesheet">

</head>

<body class="fond">

<?php
include("models/header.php");
?>

<!-- Page Content -->
<div class="container">

    <!-- Page Heading -->
    <h1 class="my-4">Mes projets
    </h1>

    <?php while($article = $requete->fetch()){ ?>
        <!-- Project -->
        <div class="row">
            <div class="col-md-7">
                <img class="img-fluid rounded mb-3 mb-md-0" src="<?php echo $article['image']?>" height="360" width="500" alt="">
            </div>
            <div class="col-md-5">
                <h3><?php echo $article['nom'] ?></h3>
                <p><?php echo $article['description'] ?></p>
                <a class="btn btn-primary" href="<?php echo $article['lien'] ?>">Voir les détails du projet.</a>
            </div>
        </div>
        <!-- /.row -->
        <hr>
    <?php } ?>
</div>
<!-- /.container -->

<?php
include("models/footer.php");
?>

<!-- Bootstrap core JavaScript -->
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
