<?php
require_once './clases/bbdd.php';

$dbMan = new DBManager('localhost', 'root', 'root', 'MyPhoto');
$pict = $dbMan->GetPicture(2);
print "Lat: $pict->latitud; Long: $pict->longitud <br />";  // DEBUG
print "<img src='$pict->path' />";
