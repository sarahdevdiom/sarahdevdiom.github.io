<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trombeen</title>

</head>
<body>
<div class="retour">
<input type= "button" value= "X" onclick="history.back()">
</div>

<C class="photo">

<img src="<?php

echo $_GET['photo']?>" alt="" height="600"> 
<p> <?php echo $_GET['prenom'] ?> </p>

</div>
</div>
    
</body>
</html>