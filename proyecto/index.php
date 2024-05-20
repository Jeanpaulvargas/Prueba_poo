<?php

require_once 'Database.php';
require_once 'FormHandler.php';


$db = new Database('curso_honduras', 'hostname', 'service_name', 'username', 'password');


$formHandler = new FormHandler($db);
?>