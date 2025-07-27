<?php
include "connect.php";
$dastor = "SELECT * FROM user_file";
$natija =$conniction-> query($dastor);
if(isset($_GET["messege"])){
    if($_GET["messege"] === "Success"){
        echo "<h1 class='bg-green-500 py-6 text-center font-bold px-4 absolute right-0 top-12 w-[120px] ' id='id'>One item deleted</h1>";
    }
    else{
        echo "<h1>The item could not be deleted</h1>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="app.js" defer></script>
    <link rel="stylesheet" href="../src/output.css">
</head>
<!-- npx @tailwindcss/cli -i ./src/input.css -o ./src/output.css --watch  -->
<body>
    <a href="insertT.php" class="font-bold text-3xl text-center line-clamp-4 hover:shadow-md hover:shadow-gray-400 w-[20%] hover:border-b transition-all duration-200 mx-auto">ADD NEW CAR</a>
    <div class="h-screen  w-full p-6 flex gap-6 justify-center flex-wrap overflow-y-scroll">
    <?php  if($natija->num_rows>0){
        while($rows=$natija->fetch_assoc()){
        
        ?>
    <div class="h-[350px] w-[250px] rounded-2xl shadow-md shadow-gray-700 flex-col p-5 flex justify-center items-center">
            <img src="./image/<?php echo $rows['imgUrl'] ?>" class="rounded-xl h-[220px] w-[220px] " alt="">
            <h1 class="font-bold text-2xl"><?php echo $rows['name'] ?></h1>
            <div class="flex justify-center gap-5">
                <button class="py-2 px-4 bg-red-600 rounded-2xl">
                  <a href="Delete.php?id=<?php echo $rows['id']; ?>">Delete</a>
                  </button>
            <!-- <button class="py-2 px-4 bg-red-600 rounded-2xl"><a >Delete</a></button> -->
            <button class="py-2 px-4 bg-green-500 rounded-2xl">
                <a href="update.php?id=<?php echo $rows['id']; ?>">Update</a>
            </button>
        </div>
        </div>
        <?php  }} ?>
    </div> 
</body>
</html>