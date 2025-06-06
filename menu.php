<?php
include 'db.php';
include 'header.php';

$db = get_db();
$items = $db->query('SELECT id,name,price FROM menu')->fetchAll(PDO::FETCH_ASSOC);
?>
<h1>Menu</h1>
<table class="menu-table">
<tr><th>Name</th><th>Price</th></tr>
<?php foreach($items as $item): ?>
<tr>
  <td><?php echo htmlspecialchars($item['name']); ?></td>
  <td>$<?php echo number_format($item['price'], 2); ?></td>
</tr>
<?php endforeach; ?>
</table>
<?php include 'footer.php'; ?>
