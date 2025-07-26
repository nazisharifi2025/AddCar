<?php
include "connect.php";
if($_SERVER["REQUEST_METHOD"] === "POST"){
    $id = $_POST["id"];
    $name = $_POST["name"];
    $file_name = $_FILES['image']['name'];
    $tampname = $_FILES['image']['tmp_name'];
    $folder = "image/". $file_name;
    $dastor = "INSERT INTO user_file(id,name,imgUrl) VALUES('$id','$name','$file_name')";
    $conniction->query($dastor);

    Move_uploaded_file($tampname,$folder);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action=<?php echo $_SERVER["PHP_SELF"] ?> method="post" enctype = "multipart/form-data">
        <label for="">ID</label>
        <input type="number" name="id">
        <br>
        <br>
        <label for="">Name</label>
        <input type="text" name="name">
        <br>
        <br>
        <input type="file" name = "image">
        <br>
        <br>
        <button name="submit">Submit</button>

</form>
</body>
</html>