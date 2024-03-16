<?php

require 'functions.php';
function dd($value){
 echo "";
 var_dump($value);
 echo "";
die();
}

dd($value);

urlIs($value){
 return $_SERVER['REQUEST_URL'];
}


 ?>
