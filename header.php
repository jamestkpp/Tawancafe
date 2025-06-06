<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Tawan Cafe</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<header>
<nav>
<a href="/index.php">Home</a> |
<a href="/menu.php">Menu</a> |
<a href="/branches.php">Branches</a> |
<a href="/about.php">About</a> |
<a href="/contact.php">Contact</a>
<?php if(isset($_SESSION['admin'])): ?> |
<a href="/admin/menu.php">Admin</a> |
<a href="/admin/logout.php">Logout</a>
<?php else: ?> |
<a href="/admin/login.php">Login</a>
<?php endif; ?>
</nav>
</header>
<main>
