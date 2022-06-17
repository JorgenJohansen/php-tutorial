<?php 

    $title = $email = $ingredients = '';
    $errors = array('email'=>'','title'=>'','ingredients'=>'');
    

    //htmlspecialchars to prevent XSS attacks
    if(isset($_POST['submit'])){
        //check and validate email
        if(empty($_POST['email'])){
            $errors['email'] = 'An email is required';
        }else{
            $email = $_POST['email'];
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $errors['email'] = "Invalid email";
            }
            // echo htmlspecialchars($_POST['email']) . '<br/>';
        }
        //check and validate title 
        if(empty($_POST['title'])){
            $errors['title'] = 'A title is required';
        }else{
            $title = $_POST['title'];
            if(!preg_match('/^[a-zA-Z\s]+$/',$title)){
                $errors['title'] = 'Title must be letters and spaces only';
            }
        }
        //check ingredients and validate
        if(empty($_POST['ingredients'])){
            $errors['ingredients'] = 'At least 1 ingredient is required';
        }else{
            $ingredients = $_POST['ingredients'];
			if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)){
				$errors['ingredients'] = 'Ingredients must be a comma separated list';
			}
        }

        //checking for errors and redirecting
        if(!array_filter($errors)){
            header('Location: index.php');
        }

    } // end of post check

?>

<!DOCTYPE html>
<html lang="en">

<?php include('templates/header.php') ?>

<section class="container grey-text">
    <h4 class="center">Add a Pizza</h4>
    <form action="add.php" method="POST" class="white">
        <label for="">Your Email</label>
        <div class="red-text"><?php echo $errors['email']; ?></div>
        <input type="text" name="email" value="<?php echo $email; ?>">
        <label for="">Pizza Title</label>
        <div class="red-text"><?php echo $errors['title']; ?></div>
        <input type="text" name="title" value="<?php echo $title; ?>">
        <label for="">Ingredients (comma seperated): </label>
        <div class="red-text"><?php echo $errors['ingredients']; ?></div>
        <input type="text" name="ingredients" value="<?php echo $ingredients; ?>">
        <div class="center">
            <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
        </div>
    </form>
</section>
<?php include('templates/footer.php') ?>
    

</html>