<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Trombeen</title>
    </head>
    <body> 

</body>
    <?php 
$motdepasse='alesdev5';
//Etape 1: on test si le formulaire à bien été envoyé
if (isset($_POST['envoi'])) {
//Etape 2 : On vérifie que la case est remplie
if (isset($_POST ['mdp']) and  !empty($_POST ['mdp'])) {
//Etape 3 on vérifie que le mot de passe entré est celui qu'on a défini
if ($_POST ['mdp'] == $motdepasse) {
$accessgranted = 1;
} 
else 
{
echo 'Attention le mot de passe entré est erroné';
}
} else 
{
echo 'Attention vous devez remplir le mot de passe';
}
}
if(!isset($accessgranted)) { ?>
<h1>Bienvenue, cette page est protégée entre ton mot de passe ci-dessous</h1>
<style>
h1 {text-align:center;}
</style>

<hr/> 


<?php
if(!isset($erreur)) { echo$erreur; }
?>

<form action="" method="post">
    mot de passe : <input type="text" name="mdp" />
<input type="submit" name="envoi" value=Entrer />

</form>


<?php } else {
    // Début de la page sécurisée ?>

    <h1>Bienvenue, tu es connecté! On est beau n'est-ce pas?</h1>

    <style>h1 {text-align:center;} </style>

    <div class="Principal">
        <ul>
        <li><a href="apprenant.php?photo=images/Altayeb.JPG&prenom=Altayeb"><img src="images/Altayeb.JPG" alt="Photo d'altayeb"> <br><p>Altayeb</p></li>
        <li><a href="apprenant.php?photo=images/Cedric.JPG&prenom=Cédric"><img src="images/Cedric.JPG " alt="photo de Cédric" ><br><p>Cédric</p></li>            
            <li><a href="apprenant.php?photo=images/Damien.JPG&prenom=Damien"><img src="images/Damien.JPG " alt="photo de Damien" ><br><p>Damien</p></li>            
            <li><a href="apprenant.php?photo=images/Chloe.JPG&prenom=Chloe"><img src="images/Chloe.JPG " alt="photo de Chloe" ><br><p>Chloe</p></li>   
            <li><a href="apprenant.php?photo=images/Delphine.JPG&prenom=Delphine"><img src="images/Delphine.JPG " alt="photo de Delphine" ><br><p>Delphine</p></li>
            <li><a href="apprenant.php?photo=images/Eva.JPG&prenom=Eva"><img src="images/Eva.JPG " alt="photo d'Eva" ><br><p>Eva</p></li>
            <li><a href="apprenant.php?photo=images/Fabien.JPG&prenom=Fabien"><img src="images/Fabien.JPG " alt="photo de Fabien" ><br><p>Fabien</p></li>
            <li><a href="apprenant.php?photo=images/Gregoire.JPG&prenom=Gregoire"><img src="images/Gregoire.JPG " alt="photo de Gregoire" ><br><p>Gregoire</p></li>   
            <li><a href="apprenant.php?photo=images/Jawad.JPG&prenom=Jawad"><img src="images/jawad.jpeg " alt="photo de Jawad" ><br><p>Jawad</p></li>
            <li><a href="apprenant.php?photo=images/Kahina.JPG&prenom=Kahina"><img src="images/Kahina.JPG " alt="photo de Kahina" ><br><p>Kahina</p></li>
            <li><a href="apprenant.php?photo=images/Lindsay.JPG&prenom=Eva"><img src="images/Lindsay.JPG " alt="photo de Lindsay" ><br><p>Lindsay</p></li>
            <li><a href="apprenant.php?photo=images/Olivier.JPG&prenom=Olivier"><img src="images/Olivier.JPG " alt="photo d'Olivier" ><br><p>Olivier</p></li> 
            <li><a href="apprenant.php?photo=images/Pascal.JPG&prenom=Pascal"><img src="images/Pascal.JPG " alt="photo de Pascal" ><br><p>Pascal</p></li>
            <li><a href="apprenant.php?photo=images/Sarah.JPG&prenom=Sarah"><img src="images/Sarah.JPG " alt="photo de Sarah" ><br><p>Sarah</p></li>
            <li><a href="apprenant.php?photo=images/Stephanie.JPG&prenom=Stephanie"><img src="images/Stephanie.JPG " alt="photo de Stephanie" ><br><p>Stephanie</p></li>
            <li><a href="apprenant.php?photo=images/Yoann.JPG&prenom=Yoann"><img src="images/Yoann.JPG " alt="photo de Yoann" ><br><p>Yoann</p></li>     
        </ul>
    </div>
    
<?php }
//Fin de la page sécurisée ?>