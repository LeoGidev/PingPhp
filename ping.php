<?php
$q = $_GET['q'];
$comando = "ping ".$q." -n 2 ";
$output = shell_exec($comando);

?>