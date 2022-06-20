<?php 
    
    require('database.php');

    if(isset($_POST['delete'])){
        $id = mysqli_real_escape_string($conn,  $_POST['id_to_delete']);

        $deleteString = "DELETE FROM pizzas WHERE id = $id";

        if(mysqli_query($conn, $deleteString)){
            //Success
            header('Location: index.php');
        }else{
            echo 'query error: ' . mysqli_error($conn);
        }
        mysqli_close($conn);
    }

    //check GET request id params
    if(isset($_GET['id'])){
        $id = mysqli_real_escape_string($conn,  $_GET['id']);

        //querystring where we select one record with the id we are getting
        $queryString = "SELECT * FROM pizzas WHERE id = $id";

        //get the query result
        $queryResult = mysqli_query($conn, $queryString);

        //fetch the result in array format
        $pizza = mysqli_fetch_assoc($queryResult);

        mysqli_free_result($queryResult);
        mysqli_close($conn);

        // print_r($pizza);

    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include('templates/header.php') ?>

<div class="container center grey-text">
    <?php if($pizza): ?>
        <h4><?php echo htmlspecialchars($pizza['title']); ?></h4>
        <p>Created by: <?php echo htmlspecialchars($pizza['email']); ?></p>
        <p><?php echo date($pizza['created_at']); ?></p>
        <h5>Ingredients:</h5>
        <p><?php echo htmlspecialchars($pizza['ingredients']); ?></p>

        <!-- Delete form  -->
        <form action="details.php" method="POST">
            <input type="hidden" name="id_to_delete" value="<?php echo $pizza['id']; ?>">
            <input type="submit" name="delete" value="Delete" class="btn brand z-depth-0">
        </form>

    <?php else: ?>
        <h5>There is no such pizza!!!!</h5>
    <?php endif; ?>
</div>

<?php include('templates/footer.php') ?>
</body>
</html>