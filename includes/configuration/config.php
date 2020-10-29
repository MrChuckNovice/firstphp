<?php
ob_start();
ob_clean();
defined("DB_SERVER")?null:define("DB_SERVER","localhost");
defined("DB_USER")?null:define("DB_USER","root");
defined("DB_PASS")?null:define("DB_PASS","");
defined("DB_NAME")?null:define("clients");
?>