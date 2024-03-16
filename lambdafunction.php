<!DOCTYPE html>
<html>
<body>

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

 function filterByAuthor($books,$author){
 $filteredBooks = [];
  foreach ($books as $book){
if ($book['author'] ===  $author){
  $filteredBooks[] = $book;
}
}
  return $filteredBooks;
}

  $filterByAuthor = filterByAuthor($books,'ahmad samsudin');
?>

<ul>

<?php foreach ($filterByAuthor as $book) : ?>
<li>
<?= $book['title'] ?>
</li>
<?php endforeach; ?>
</ul>


</body>
</html>