<?php

// Persist data
$email = $title = $ingredients = '';

// Current errors
$errors = array(
    'email' => '',
    'title' => '',
    'ingredients' => ''
);

// Check if there is data on the request, i.e, if 'submit' is set

// Note. We use global arrays $_GET or $_POST for doing so

if (isset($_POST['submit'])) {
    // Check email
    if (empty($_POST['email'])) {
        $errors['email'] = 'An email is required <br />';
    } else {
        $email = htmlspecialchars($_POST['email']);

        // Filter function filter_var($variable, FILTER_TYPE) : bool
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Email must be a valid email address <br />';
        }
    }

    // Check title
    if (empty($_POST['title'])) {
        $errors['title'] = 'A title is required <br />';
    } else {
        $title = htmlspecialchars($_POST['title']);

        // RegEx verification: title should have
        // - Letters from a to z
        // - Letters from A to Z
        // - Spaces
        if (!preg_match('/^[a-zA-Z\s]+$/', $title)) {
            $errors['title'] = 'Title must be letters and spaces only <br />';
        }
    }

    // Check ingredients
    if (empty($_POST['ingredients'])) {
        $errors['ingredients'] = 'At least one ingredient is required <br />';
    } else {
        $ingredients = htmlspecialchars($_POST['ingredients']);
        if (!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)) {
            $errors['ingredients'] = 'Ingredients must be a comma separated list <br />';
        }
    }

    // Check if there is any error last

    // Method array_filter loops over all elements. 

    // If there are only empty string, it will return false

    if (array_filter($errors)) {
        // echo 'Errors in the form';

    } else {
        // echo 'Form is valid. Redirecting user...';
        header('Location: index.php');
    }
}
?>

<!DOCTYPE html>
<html>
<?php include "templates/header.php"; ?>

<section class="container grey-text">
    <h4 class="center">Add a Pizza</h4>

    <!-- add.php will receive data from this form -->
    <form action="" class="white" action="add.php" method="POST">

        <!-- Email -->
        <label for="email">Your email</label>
        <input type="text" name="email" value="<?php echo $email; ?>">
        <div class="red-text"><?php echo $errors['email']; ?></div>

        <!-- Title -->
        <label for="title">Pizza title</label>
        <input type="text" name="title" value="<?php echo $title; ?>">
        <div class="red-text"><?php echo $errors['title']; ?></div>

        <!-- Ingredients -->
        <label for="ingredients">Ingredients (comma separated)</label>
        <input type="text" name="ingredients" value="<?php echo $ingredients; ?>">
        <div class="red-text"><?php echo $errors['ingredients']; ?></div>

        <div class="center">
            <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
        </div>
    </form>
</section>

<?php include "templates/footer.php"; ?>

</html>