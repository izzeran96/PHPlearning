<?php

 $books = [
   [
  'title' => 'The story malaysia',
   'author' => 'ahmad samsudin',
   'purchaseUrl' = 'http://example.com'
  ],
    [
'title' => 'Sundaland and nusantara',
   'author' => 'ari pribowo',
   'purchaseUrl' = 'http://example.com'
]
];

$filteredBook = array_filter($books,function($book){
 return $book[] === 
});

require 'index.viex.php';
?>