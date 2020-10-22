<?php 
$motdepasse='alesdev5';
//Etape 1: on test si le formulaire à bien été envoyé
if (isset($_POST['envoi'])) {
//Etape 2 : On vérifie que la case est remplie
if (isset($_POST ['mdp']) and  !empty($_POST ['mdp'])) {
//Etape 3 on vérifie que le mot de passe entré est celui qu'on a défini
        if ($_POST ['mdp'] == $motdepasse) {
            $accessgranted = 1;
   } else {
        $erreur= 'Attention le mot de passe entré est erroné';
        }
    } else {
        $erreur= 'Attention vous devez remplir le mot de passe';
    }
}
if(!isset($accessgranted)) { ?>
<h1>Page protégée par mot de passe</h1>
<hr/> 
<?php
if(!isset($erreur)) { echo$erreur; }
?>

<form action="" method="post">
    Veuillez entrer le mot de passe ci-dessous:<br />
    mot de passe : <input type="text" name="mdp" />
<input type="submit" name="envoi" value=Entrer />

</form>

<?php } else {
    // Début de la page sécurisée ?>

    <h1>Bienvenue, vous êtes connecté!</h1>

    <?php }
//Fin de la page sécurisée ?>