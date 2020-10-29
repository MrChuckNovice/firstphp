<?php
require_once("includes/inc_files.php");
// Connecter DB -> PDO //
$pdo= new PDO('mysql:host=' . DB_SERVER . ';dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PASS, array(
    PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8 COLLATE utf8_general_ci',
    PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));// On crée une instance de la classe PDO qui par défaut nous connecte à la base de données.

    //********************************/
    $query = $pdo->query('SELECT*FROM tb_client');
    
    if ($query === false) {
        var_dump($pdo->errorInfo());
        die('Erreur sql');
    }
    $data = $query->fetchAll( PDO::FETCH_ASSOC);
    
    echo "<pre>";
    var_dump($data);
    echo "</pre>";

    ?>

