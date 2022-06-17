# php-tutorial
PHP tutorial from the net ninja: https://youtube.com/playlist?list=PL4cUxeGkcC9gksOX3Kd9KPo-O68ncT05o

# To make this work
Make sure you have xampp installed and set up a mysql database.
Then add a database.php file with the following content

<?php

$conn = mysqli_connect(hostname, username, password, tablename);

?>

# Also
You also need to start both the Apache and Mysql servers from the control panel.