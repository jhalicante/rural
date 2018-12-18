<?php

$user = 'root';
$pass = 'root';
$db ='rural';

$db = new mysqli('localhost', $user,$pass,$db);
$result = $db->query("INSERT INTO `ozekimessageout`(`id`, `sender`, `receiver`, `msg`, `senttime`, `receivedtime`, `reference`, `status`, `msgtype`, `operator`, `errormsg`) VALUES ('value-1','value-2','value-3','value-4','value-5','value-6','value-7','value-8','value-9','value-10','value-11')");


?>