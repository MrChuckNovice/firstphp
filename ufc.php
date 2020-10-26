<?php
$winner= $_POST['fighter'];

switch ($winner) {
    case "KHABIB":
        echo $winner. " il a gagner le dernier ufc";
    break;
    case "CONNOR":
        echo $winner. " se con ne s'est pas battu au dernier ufc";
    break;
    case "GADJEE":
        echo $winner. " il s'est fait déboiter par Khabib";
    break; 
}
?>

<form action="ufc.php" method="post";>
  <select name="fighter">
    <option value="">...</option>
    <option value=KHABIB>Khabib</option>
    <option value=CONNOR>Connor</option>
    <option value=GADJEE>Gadjee</option>
</select>
<input type=submit></input>
</form>