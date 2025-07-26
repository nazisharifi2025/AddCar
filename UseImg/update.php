<?php 
include "connect.php";
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $dastor = "SELECT * FROM user_file WHERE id='$id'";
    $result = $conniction->query($dastor); 
    $row = $result->fetch_assoc();
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
    <div class="h-screen w-full flex justify-center items-center">
        <form action="" class="h-[70%] w-[40%] border rounded-2xl p-12 flex justify-between flex-col">
            <label for="" class="font-bold ">ID:</label>
            <input value=<?php echo $row['id']; ?> type="text" class="border rounded-[5px] py-2 ">
            <br>
            <br>
             <label for="" class="font-bold ">NAME:</label>
            <input value=<?php echo $row['name']; ?> type="text" class="border rounded-[5px] py-2 ">
            <br>
            <br>
             <label for="" class="font-bold ">IMGURL:</label>
            <input type="text" value=<?php echo $row['imgUrl']; ?> class="border rounded-[5px] py-2 ">
            <button class="bg-blue-300 py-3 px-4 rounded-[5px] my-5">submet</button>
        </form>
    </div>
</body>
</html>