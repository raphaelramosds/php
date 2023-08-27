<?php

include "config/db_connect.php";

// Check DELETE request by veryfing if delete is set
if (isset($_POST['delete'])) {
    // Fetch id
    $id_to_delete = mysqli_real_escape_string($conn, $_POST['id_to_delete']);
    
    // Query for deleting pizza
    $query = "DELETE FROM pizzas WHERE id = $id_to_delete";

    if (mysqli_query($conn, $query)) {
        header('Location: index.php');
    } else {
        echo 'Query error: '. mysqli_error($conn);
    }
}

// Check GET request id param
if (isset($_GET['id'])) {

    // Escape SQL malicious queries
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    // Get pizza from its id
    $query = "SELECT * from pizzas WHERE id = $id";

    // Run query
    $result = mysqli_query($conn, $query);

    // Fetch the first row as associative array
    $pizza = mysqli_fetch_assoc($result);

    // Free memory
    mysqli_free_result($result);

    // Close connection
    mysqli_close($conn);
}

?>

<!DOCTYPE html>

<html>

<?php include "templates/header.php"; ?>

<div class="container center">
    <?php if ($pizza) : ?>

        <!-- Pizza info -->

        <h4><?php echo htmlspecialchars($pizza['title']); ?></h4>

        <p>Created by: <?php echo htmlspecialchars($pizza['email']) ?></p>

        <p><?php echo date($pizza['created_at']); ?></p>

        <h5>Ingredients: </h5>
        <p><?php echo htmlspecialchars($pizza['ingredients']); ?></p>

        <!-- Delete form -->
        <form action="details.php" method="POST">
            <input type="hidden" name="id_to_delete" value="<?php echo $pizza['id']; ?>">
            <input type="submit" name="delete" value="Delete" class="btn brand z-depth-0">
        </form>

    <?php else : ?>

        <h5>No such pizza exists!</h5>

    <?php endif; ?>
</div>

<?php include "templates/footer.php"; ?>

</html>