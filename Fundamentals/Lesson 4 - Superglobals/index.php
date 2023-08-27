<?php

/*
 |------------------------------------------------------
 | Superglobals
 |------------------------------------------------------
 | Some predefined variables in PHP are "superglobals"
 | It means that they are always accessible, regard-
 | less of scope. PHP superglobals are
 |
 | - $GLOBALS
 | - $_SESSION
 | - $_COOKIE
 | - $_POST
 | - $_GET
 | - $_REQUEST
 | - $_SERVER
 | - $_FILES
 | - $_ENV
*/

$qs = $_SERVER['QUERY_STRING'] ?? ''; // Note. ?? is the Null Coalescing operator

echo "<pre>";
echo 'Server name: ' . $_SERVER['SERVER_NAME'] . '<br />';
echo 'Request method: ' . $_SERVER['REQUEST_METHOD'] . '<br />';
echo 'Path to this page: ' . $_SERVER['SCRIPT_FILENAME'] . '<br />';
echo 'Current page: ' . $_SERVER['PHP_SELF'] . '<br />';
echo 'Query string: ' . $qs . '<br />';
echo "</pre>";

// Check if submit is set
if (isset($_POST['submit'])) {

    // Set cookie for gender
    setcookie('gender', $_POST['gender'], time() + 86400);

    // Note. 86400 seconds is the time for the cookie expire

    // Start a session
    session_start();

    // Set session variable for name
    $_SESSION['name'] = $_POST['name'];

    // Redirect to Hello page
    header('Location: hello.php');
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Superglobals</title>
</head>

<body>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
        <input type="text" name="name" placeholder="Your name">
        <select name="gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>

</html>