<?php
session_start();
if(!isset($_SESSION['admin'])) { header('Location: login.php'); exit; }
require_once '../db.php';
$db = get_db();
// Handle actions
if(isset($_POST['action'])) {
    if($_POST['action'] === 'add') {
        $stmt = $db->prepare('INSERT INTO menu (name, price) VALUES (?, ?)');
        $stmt->execute([$_POST['name'], $_POST['price']]);
    } elseif($_POST['action'] === 'delete') {
        $stmt = $db->prepare('DELETE FROM menu WHERE id = ?');
        $stmt->execute([$_POST['id']]);
    }
}
$items = $db->query('SELECT id,name,price FROM menu')->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head><meta charset="UTF-8"><title>Manage Menu</title></head>
<body>
<h1>Manage Menu</h1>
<table border="1" cellpadding="5">
<tr><th>Name</th><th>Price</th><th>Action</th></tr>
<?php foreach($items as $item): ?>
<tr>
<td><?php echo htmlspecialchars($item['name']); ?></td>
<td>$<?php echo number_format($item['price'],2); ?></td>
<td>
<form method="post" style="display:inline">
<input type="hidden" name="id" value="<?php echo $item['id']; ?>">
<input type="hidden" name="action" value="delete">
<button type="submit">Delete</button>
</form>
</td>
</tr>
<?php endforeach; ?>
</table>
<h2>Add Item</h2>
<form method="post">
<input name="name" placeholder="Name" required>
<input name="price" placeholder="Price" step="0.01" type="number" required>
<input type="hidden" name="action" value="add">
<button type="submit">Add</button>
</form>
<p><a href="../index.php">Back to site</a></p>
</body>
</html>
