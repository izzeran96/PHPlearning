<!DOCTYPE html>
<html>
<body>

<?php 
<ul>

<?php foreach ($filteredBook as $book) : ?>
<li>
<a href="<?= $book['purchaseUrl'] ?>"></a>
<?= $book['title'] ?>
</li>
<?php endforeach; ?>
</ul>


</body>
</html>