<?php 
include "connect.php";
if(isset($_GET['id'])){
    $id = $_GET['id'];

    $dastor = "DELETE FROM user_file WHERE id =".$id ;
    if($conniction->query($dastor)===true){
        header("location:read.php?messege=Success");
    }else{
        header("location:insert.php?messege=fail");
    };
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../src/output.css">
</head>
<body>
    
</body>
</html>