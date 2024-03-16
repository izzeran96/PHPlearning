<?php

 $books = [
   [
  'title' => 'The story malaysia',
   'author' => 'ahmad samsudin',
   'purchaseUrl' => 'http://example.com'
  ],
    [
'title' => 'Sundaland and nusantara',
   'author' => 'ari pribowo',
   'purchaseUrl' => 'http://example.com'
]
];

$filteredBook = array_filter($books,function($book){
 return $book['author'] === 'ari pribowo';
});

foreach($filteredBook as $book){
    
    echo $book['title'];
}

//require 'index.view.php';
//can passed foreach to view files like a top syntax
?>