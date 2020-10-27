<?php
if (empty($_POST)){
    echo "veuillez choisir";
}
else{
$villechoisie= $_POST['ville']; 
switch ($villechoisie) {
    case "paris":
        echo $villechoisie. "est la capitale de la France";
    break;
    case "moscou":
        echo $villechoisie. "est la capitale de la Russie";
    break;
    case "londre":
        echo $villechoisie. "est la capitale de la Grande-Bretagne";
    break;    
}
}
?>

<form action="villes.php" method= "post";>
  <select name="ville">
      <option value="">...</option>
      <option value="paris">paris</option>
      <option value="moscou">moscou</option>
      <option value="londre">londre</option>
  </select>
  <input type=submit></input>
 </form>   