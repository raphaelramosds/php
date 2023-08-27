<?php

include "config/db_connect.php";

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
                        <!-- Pizza title -->
                        <h6><?php echo htmlspecialchars($pizza['title']); ?></h6>
                        <!-- Ingredients list -->
                        <div>
                            <ul>
                                <?php foreach (explode(',', $pizza['ingredients']) as $ingredient) : ?>
                                    <li><?php echo htmlspecialchars($ingredient)?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="card-action right-align">
                        <a href="details.php?id=<?php echo $pizza['id']?>" class="brand-text">More info</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php include "templates/footer.php"; ?>

</html>