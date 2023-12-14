<?php
$q = $_GET['q'];
$comando = "ping ".$q." -n 2 ";
$output = shell_exec($comando);
if (strpos($output, "recibidos = 0")|| strpos($output, "vuelva a intentarlo.")||strpos($output, "TTL expirado")||strpos($output, "Host de destino inaccesible") ) {
    echo "<ul class='list-group list-group-horizontal'><li class='list-group-item list-group-item-danger'>";
	echo $q;
	echo " Down</li></ul>";
}else {
    echo "<ul class='list-group list-group-horizontal'><li class='list-group-item list-group-item-success'>";
	echo $q;
	echo " OK</li></ul>";
}

?>