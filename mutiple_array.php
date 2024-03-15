
<!DOCTYPE html>
<html>
<body>

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
?>

<ul>

<?php foreach($books as $book) : ? ?>
<li>
<?php $book['title'] ?>
</li>
<?= endforeach ?>
</ul>


</body>
</html>
