<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../src/output.css">
</head>
<body>
    <div class="h-screen w-full gap-6  flex justify-center flex-col items-center overflow-y-scroll">
        <h1 class="font-bold text-4xl text-center uppercase shadow-md shadow-gray-700">Add New Car</h1>
        <form class="h-[80%] w-[40%] p-4 shadow-xl rounded-2xl  shadow-black border gap-4    justify-between flex flex-col " action=<?php $_SERVER["PHP_SELF"] ?> method="post" >
            <div >
                <label for="" class="font-bold">ID:</label>
                <input type="number" name="id" class="py-2 w-full border rounded-xl outline-0">
            </div>
            <div >
                <label for=""  class="font-bold">CAR NAME:</label>
                <input type="text" name="name" class="py-2 w-full border rounded-xl outline-0">
            </div>
            <div>
                <label for=""  class="font-bold">IMGURL:</label>
                <input type="file" name="imgUrl" class="py-2 w-full border rounded-xl outline-0">
            </div>
            <div>
                <label for=""  class="font-bold">MODEL:</label>
                <input type="text" name="model" class="py-2 w-full border rounded-xl outline-0">
            </div>
            <div>
                <label for=""  class="font-bold">PRICE:</label>
                <input type="number" name="price" class="py-2 w-full border rounded-xl outline-0">
            </div>
            <div>
                <label for=""  class="font-bold">STATE:</label>
                <input type="number" name="state" class="py-2 w-full border rounded-xl outline-0">
            </div>
            <button class="py-2 px-3 w-[40%] bg-gray-300 shadow-md shadow-gray-800 rounded-xl font-bold mx-auto hover:bg-white hover:shadow-xl transition-all delay-300 ">SUBMIT</button>
        </form>
    </div>
    <?php 
    if($_SERVER["REQUEST METHOD"] === "POST"){
        $ID = $_POST["id"];
        $name = $_POST["name"];
        $imgUrl = $_POST["imgUrl"];
        $model = $_POST["model"];
        $price = $_POST["price"];
        $state = $_POST["state"];
        $Dastor = "INSERT INTO CARID (id ,name,brand,price,stat" values('$id,$name,model,')
    }
    ?>
</body>
</html>