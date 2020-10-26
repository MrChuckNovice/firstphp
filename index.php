<?php
$villechoisie=($_POST['ville']);

switch ($villechoisie) {
    case "paris":
        echo "Paris est la capitale de la France";
    break;
    case "moscou":
        echo "Moscou est la capitale de la Fédération de Russie";
    break;
    case "londre":
        echo "Londre est la capitale de la Grande-Bretagne";
    break;
}
?>
<form action="index.php" method="post">
          <label for="ville">choisit une ville:</label>
          <select id="ville" name="ville">
               <option value="paris">paris</option>
               <option value="moscou">moscou</option>
               <option value="londre">londre</option>
            </select>
          <input type="submit">
    </form>