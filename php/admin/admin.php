<?php
    session_start();
    $racine = "../..";
?>
<!DOCTYPE html>
<html lang="en">
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
    <?php
        if(!empty($_SESSION['id'])):
    ?>
        <p>Bienvenue <?php echo $_SESSION['pseudo'] ?></p>
    <?php
        else:
    ?>
        <form method="post" action="connexion.php">
            <div class="form-group">
                <label for="exampleInputEmail1">Pseudo</label>
                <input type="text" class="form-control" name="pseudo" id="pseudo" aria-describedby="emailHelp" placeholder="Entrez votre pseudo.">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Entrez votre mot de passe.">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    <?php endif; ?>
</div>
<!-- /.container -->

<?php
    include($racine . "/php/models/footer.php");
?>

<!-- Bootstrap core JavaScript -->
<script src="<?php echo $racine ?>/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo $racine ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>