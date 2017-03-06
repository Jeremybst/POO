<?php

require 'Personnage.php';

$merlin = new Personnage("Merlin");
$merlin->regenerer(5);

$harry = new Personnage("Harry");
$harry->regenerer();

var_dump($merlin);
var_dump($harry);

 ?>
