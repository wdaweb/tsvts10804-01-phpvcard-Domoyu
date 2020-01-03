<!-- check -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<?php

// session_start();
// print_r($_FILES);
// echo "<br>";
// echo $_FILES['pic']['tmp_name'];
// print_r($_POST);
// echo $_POST['whatpic']['tmp_name'];


copy($_FILES['pic']['tmp_name'],"pic/".$_FILES['pic']['name']);

$myfiles = $_POST;
$myfiles['pic'] = $_FILES['pic']['name'];

session_start();
$_SESSION['file'] = $myfiles;

header('location:preview.php');


?>
<body>
    
</body>
</html>