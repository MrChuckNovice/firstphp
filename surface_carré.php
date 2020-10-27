<?php
// on oublie pas de mettre if (empty($_POST)) si non 
if (empty($_POST)) {
    echo "veuillez choisir";
}
else{
  
//ici on designe les valeurs $longueur et $largeur //
$longueur= $_POST['longueur'];
$largeur= $_POST['largeur'];
// ici $aireCarré va contenir le résultat du calcul de mes de variable //
$aireCarré= $longueur*$largeur;
echo $aireCarré;
// ici on va afficher a l'écran $aireCarré //
}
?>

<form action="" method="post";>
     <input type="number" name="longueur">longueur</input>
    <br><br>
     <input type="number" name="largeur">largeur</input>
    <br><br>
    <input type="submit" value="calcul"></>
</form>
