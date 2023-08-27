<?php 

session_start();

// Get session data
$name = $_SESSION['name'] ?? 'Guest';

// Set a session variable
// $_SESSION['name'] = 'Other name';

// Destroy a session variable
// unset($_SESSION['name']);

// Clears all variables registered on session
// session_unset();

// Get cookie
$gender = $_COOKIE['gender'] ?? 'Unknow';

?>
<!DOCTYPE html>
<html>
<head>
    <title>Superglobals</title>
</head>
<body>
    <h1>Hello, <?php echo htmlspecialchars($name); ?> (<?php echo htmlspecialchars($gender);?>)</h1>
</body>
</html>