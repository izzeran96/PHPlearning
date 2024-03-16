<!DOCTYPE html>
<html>
<body>

<?php 
<ul>

<?php foreach ($filterByAuthor as $book) : ?>
<li>
<a href="<?= $book['purchaseUrl'] ?>"></a>
<?= $book['title'] ?>
</li>
<?php endforeach; ?>
</ul>


</body>
</html>