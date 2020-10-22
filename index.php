<h1>page protégée par mot de passe<h1>
<hr/>
<?php 
$motdepasse="alèsdev5";
//Etape 1: on test si le formulaire à bien été envoyé
if(isset($_POST ["envoie"])) {
    //Etape 2 : On vérifie que la case est remplie
if(isset($_POST ["mdp"]) AND ! empty($_POST ["mdp"]) {
//Etape 3 on vérifie que le mot de passe entré est celui qu'on a défini
if($_POST ["mdp"]== $motdepasse {
echo "Bienvenue dans l'espace sécurisé.";
} 
else
{
echo 'Attention le mot de passe entré est erroné' < br />;
}
}
else
{
echo 'Attention vous devez remplir le mot de passe' < br />;
}
}
?>
<form action="./connexion.php" method="post" name="formConnexion">
Password : <input name="password" id="password" type="password" />
</form>




