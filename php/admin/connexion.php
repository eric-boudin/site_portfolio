<?php
$pseudo = htmlspecialchars($_POST['pseudo']);
$mdp = sha1(htmlspecialchars($_POST['password']));
try{
    $bdd = new PDO('mysql:host=localhost;dbname=portfolio;charset=utf8', 'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $requete = $bdd->query("SELECT * FROM admin where pseudo = '" . $pseudo . "' AND password = '" . $mdp ."'");
    if(($user = $requete->fetch())){
        session_start();
        $_SESSION['id'] = $user['id'];
        $_SESSION['pseudo'] = $user['pseudo'];
        echo $_SESSION['id'];
        echo $_SESSION['pseudo'];
        header("Location:admin.php");
    }
    else{
        echo 'Aucun utilisateur trouvé pour cette combinaison login/mot de passe';
    }
}catch(PDOException $e) {
    $e->getMessage();
}catch(Exception $e){
    $e->getMessage();
}
