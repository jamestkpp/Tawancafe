<?php
include 'db.php';
include 'header.php';

$db = get_db();
$items = $db->query('SELECT id,name,price FROM menu')->fetchAll(PDO::FETCH_ASSOC);
?>
<h1>Menu</h1>
<ul>
<?php foreach($items as $item): ?>
<li><?php echo htmlspecialchars($item['name']); ?> - $<?php echo number_format($item['price'],2); ?></li>
<?php endforeach; ?>
</ul>
<?php include 'footer.php'; ?>
