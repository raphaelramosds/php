<?php

// One might connect to databases using MySQLi or PDO (recommended)

// Connect to database
define('HOST', 'localhost');
define('USER', 'shaun');
define('PASSWORD', '1234');
define('DATABASE', 'ninja_pizza');

// Connection

$conn = mysqli_connect(HOST, USER, PASSWORD, DATABASE);

if (!$conn):
    echo "Connection error: " . mysqli_connect_error();
endif;

// GET pizzas query
$sql = 'SELECT title, ingredients, id FROM pizzas ORDER BY created_at';

// Run query
$result = mysqli_query($conn, $sql);

// Fetch the resulting rows as an associative array
$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Free result from memory
mysqli_free_result($result);

// Close connection
mysqli_close($conn);

// print_r($pizzas);

?>

<!DOCTYPE html>
<html>
<?php include "templates/header.php"; ?>

<h4 class="center grey-text">Pizzas</h4>

<div class="container">
    <div class="row">
        <?php foreach ($pizzas as $pizza) : ?>
            <div class="col s6 md3">
                <div class="card z-depth-0">
                    <div class="card-content center">
                        <h6><?php echo htmlspecialchars($pizza['title']); ?></h6>
                        <div><?php echo htmlspecialchars($pizza['ingredients']); ?></div>
                    </div>
                    <div class="card-action right-align">
                        <a href="#" class="brand-text">More info</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php include "templates/footer.php"; ?>

</html>