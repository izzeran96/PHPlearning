<?php

require 'functions.php';

function urlIs($value){
 return $_SERVER['REQUEST_URL'] === $value;
}

if(urlIs('/')){{


 ?>
