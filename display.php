<?php
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit;
}

$user_data = explode(",", file_get_contents("data/users.txt"));
foreach ($user_data as $data) {
    if ($_SESSION['email'] === trim($data[2])) {
        $first_name = $data[0];
        break;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
</head>
<body>
	<h1>Welcome, <?php echo $first_name; ?>!</h1>
	<p>You are logged in.</p>
</body>
</html>