#!/home/devcc/bin/php
<?php

$x=fopen ("php://stdin","r");
$d='';
while ($s=fgets($x)) {
	$d.=$s;
}
fclose($x);

$u=json_decode($d);
$m = new Mongo("mongodb://127.0.0.1:27017");
$parm = $argv[1];
$in = $m->motion->$parm;
$in->save($u);
$m->close();
?>
