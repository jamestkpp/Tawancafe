<?php
session_start();
if(isset($_SESSION['admin'])) {
    header('Location: menu.php');
    exit;
}
$error = '';
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    if($_POST['user'] === 'admin' && $_POST['pass'] === 'password') {
        $_SESSION['admin'] = true;
        header('Location: menu.php');
        exit;
    } else {
        $error = 'Invalid credentials';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head><meta charset="UTF-8"><title>Login</title></head>
<body>
<h1>Admin Login</h1>
<?php if($error) echo '<p style="color:red">'.$error.'</p>'; ?>
<form method="post">
<input name="user" placeholder="Username"><br>
<input name="pass" type="password" placeholder="Password"><br>
<button type="submit">Login</button>
</form>
</body>
</html>
