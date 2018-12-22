<?php
$pseudo = htmlspecialchars($_POST['pseudo']);
$mdp = sha1(htmlspecialchars($_POST['password']));
$bdd = new PDO('mysql:host=localhost;dbname=portfolio;charset=utf8', 'root', '');
//$requete = $bdd->prepare('INSERT INTO admin(pseudo,password) VALUES (?,?) ');
$requete = $bdd->prepare('SELECT * FROM admin WHERE pseudo = ? AND password = ?');
$res = $requete->execute(array($pseudo,$mdp));
if(($user = $res->fetch())){
    session_start();
    $_SESSION['id'] = $user['id'];
    $_SESSION['pseudo'] = $user['pseudo'];
    echo $_SESSION['id'];
    echo $_SESSION['pseudo'];
    //header("Location:admin.php");
}
else{
    echo 'Aucun utilisateur trouvé pour cette combinaison login/mot de passe';
}
