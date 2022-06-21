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

    // File system

    // $quotes = readfile('readme.txt');

    // echo $quotes;

    // $file = 'readme.txt';

    // if(file_exists($file)){
    //     // echo readfile($file) . '<br />';

    //     // //Copy file

    //     // copy($file, 'quotes.txt');

    //     // //absolute path
    //     // echo realpath($file) . '<br />';

    //     // //file size
    //     // echo filesize($file) . ' bytes' . '<br />';

    //     // //rename file
    //     // rename($file, 'test.txt');
    // }else{
    //     echo 'No such file';
    // }

    //make directory
    // mkdir('quotes');

    //File system part 2
    
    //filename
    $file = 'quotes.txt';

    //opening a file for reading
    // $handle = fopen($file, 'a+');

    // //read the file
    // // echo fread($handle, filesize($file));
    // // echo fread($handle, 112);

    // //read a single line // uses a pointer which goes to the next line after calling method
    // // echo fgets($handle);
    // // echo fgets($handle);
    

    // //read a single character // uses a pointer which goes to the next character after calling method
    // // echo fgetc($handle);
    // // echo fgetc($handle);

    // //writing to a file
    // fwrite($handle, "\nEverything popular is wrong.");

    // fclose($handle);

    // unlink($file);

    // Classes

    class User {

        private $email;
        private $name;

        public function __construct($email, $name)
        {
            $this->email = $email;
            $this->name = $name;
        }

        public function login(){
            echo $this->name . ' logged in ';
        }

        public function getName(){
            return $this->name;
        }
        public function getEmail(){
            return $this->email;
        }

        public function setName($name){
            if(is_string($name) && strlen($name) > 1){
                $this->name = $name;
                return "Name was changed to $name";
            }else{
                return 'Not a valid name';
            }
            
        }
        public function setEmail($email){
            if(str_contains($email,"@") && str_contains($email,'.')){
                $this->email = $email;
                return "Email was changed to $email";
            }else{
                return 'Not a valid email';
            }
        }

    }

    $userOne = new User("jorgen@hotmail.com",'Jørgen');

    $userOne->login();
    echo $userOne->getName() . '<br />';
    echo $userOne->getEmail() . '<br />';

    echo $userOne->setName("Høkken") . '<br />';
    echo $userOne->setEmail('Horge@hotmail.com') . '<br />';
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