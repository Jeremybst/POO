<?php

require 'Personnage.php';

$merlin = new Personnage("Merlin");
$merlin->regenerer(5);

$harry = new Personnage("Harry");
$harry->regenerer();

$merlin->attaque($harry);

if ($harry->mort()) {
  echo "Harry est mort..";
} else {
  echo 'Harry a survécu !! Avec ' . $harry->vie . ' PDV<br>';
}

var_dump($merlin);
var_dump($harry);

 ?>
