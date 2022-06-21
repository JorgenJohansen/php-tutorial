<?php 

    //ternary operators

    // $score = 50;

    //superglobals
    // $_GET['name'], $_POST['name']

    // echo $_SERVER['SERVER_NAME'] . '<br />';
    // echo $_SERVER['REQUEST_METHOD'] . '<br />';
    // echo $_SERVER['SCRIPT_FILENAME'] . '<br />';
    // echo $_SERVER['PHP_SELF'] . '<br />';

    //sessions
    //server stores information
    // if(isset($_POST['submit'])){

    //     $dayInSeconds = 86400;

    //     //cookie for gender
    //     //The method needs a value, the method and expiration date
    //     setcookie('gender', $_POST['gender'], time() + $dayInSeconds);

    //     session_start();
    //     //storing name in session
    //     $_SESSION['name'] = $_POST['name'];
    //     echo $_SESSION['name'];

    //     header('Location: index.php');
    // }

    


    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP extras</title>
</head>
<body>
    <!-- <p><?php echo $score > 40 ?  'High score!' :  'low score :('; ?></p> -->
    <!-- <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <input type="text" name="name">
        <select name="gender">
			<option value="male">male</option>
			<option value="female">female</option>
		</select>
        <input type="submit" name="submit" value="submit">
    </form> -->

</body>
</html>