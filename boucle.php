<?php
if (empty($_POST)) {
    echo " veuillez selection une direction";
  } 
   else{
$chevalier= $_POST['mouvement'];

switch ($chevalier) {
    case "haut":
        echo $chevalier. " vous vous trouver devant un mur";
    break;
    case "bas":
        echo $chevalier. " vous vous trouver devant un tresor";
    break;
    case "gauche":
        echo $chevalier. " vous vous trouver devant un monstre";
    break;
    case "droit":
        echo $chevalier. " vous vous trouver devant un gouffre";
    break;        
}
}
?>

<form action="boucle.php" method= "post";>
    <select name="mouvement">
         <option value="">...</option>
         <option value="haut">haut</option>
         <option value="bas">bas</option>
         <option value="gauche">gauche</option>
         <option value="droit">droit</option>
         <select>
             <input type=submit></input>
</form>