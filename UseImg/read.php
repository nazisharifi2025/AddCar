<?php
include "connect.php";
$dastor = "SELECT * FROM user_file";
$natija =$conniction-> query($dastor)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../src/output.css">
</head>
<!-- npx @tailwindcss/cli -i ./src/input.css -o ./src/output.css --watch  -->
<body>
    <a href="insertT.php">ADD USER</a>
    <div class="h-screen  w-full p-6 flex justify-between flex-wrap overflow-y-scroll">
    <?php  if($natija->num_rows>0){
        while($rows=$natija->fetch_assoc()){
        
        ?>
    <div class="h-[350px] w-[250px] rounded-2xl shadow-md shadow-gray-700 flex-col p-5 flex justify-center items-center">
            <img src="./image/<?php echo $rows['imgUrl'] ?>" class="rounded-xl h-[220px] w-[220px] " alt="">
            <h1 class="font-bold text-2xl"><?php echo $rows['name'] ?></h1>
            <div class="flex justify-center gap-5">
            <button class="py-2 px-4 bg-red-600 rounded-2xl">Delete</button>
            <button class="py-2 px-4 bg-green-500 rounded-2xl">Updeat</button>
        </div>
        </div>
        <?php  }} ?>
    </div> 
</body>
</html>