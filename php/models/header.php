<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap core CSS -->
    <link href="<?php echo $racine ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo $racine ?>/css/1-col-portfolio.css" rel="stylesheet">

    <!-- Mon css -->
    <link href="<?php echo $racine ?>/css/perso/perso.css" rel="stylesheet">

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="<?php echo $racine ?>/php/index.php">Portfolio Eric Boudin</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="../index.php">Acceuil
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $racine ?>/php/contact.php">Contact</a>
                </li>
                <li class="nav-item">
                    <?php if(isset($racine)):
                            $path = $racine . "/images/linkedin.png";
                    ?>
                        <a class="nav-link" href="https://www.linkedin.com/in/eric-boudin" target="reseau"><img src="<?php echo $path ?>" alt="logo de LinkedIn" height="25" width="25"/></a>
                    <?php else: ?>
                        <a class="nav-link" href="https://www.linkedin.com/in/eric-boudin" target="reseau">LinkedIn</a>
                    <?php endif; ?>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Bootstrap core JavaScript -->
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
