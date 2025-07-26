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

   if( Move_uploaded_file($tampname,$folder)){
    header("location:read.php");
   }else{
    header("location:read.php");
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
<body class="h-screen w-full flex justify-center flex-col gap-12  items-center">
    <h1 class="font-bold text-4xl">ADD NEW CAR</h1>
    <form action=<?php echo $_SERVER["PHP_SELF"] ?> method="post" enctype = "multipart/form-data" class="shadow-md rounded-2xl p-7 shadow-gray-800 flex flex-col justify-between h-[70%] w-[50%]">
        <label for="" class="font-bold ">ID:</label>
        <input type="number" name="id" class="shadow-md shadow-gray-600 py-2 rounded-[5px] outline-0">
        <br>
        <br>
        <label for="" class="font-bold ">Name:</label>
        <input type="text" name="name" class="shadow-md shadow-gray-600 py-2 rounded-[5px] outline-0">
        <br>
        <br>
        <label for="" class="font-bold ">File:</label>
        <input type="file" name = "image" class="shadow-md shadow-gray-600 py-2 rounded-[5px] outline-0">
        <br>
        <br>
        <button name="submit" class="py-2 px-4 bg-gray-300 shadow-md shadow-gray-600  rounded-[5px] hover:bg-white hover:shadow-xl transition-all duration-300 hover:shadow-gray-800 hover:">Submit</button>

</form>
</body>
</html>