<?php 
include "connect.php";
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $dastor = "SELECT * FROM user_file WHERE id='$id'";
    $result = $conniction->query($dastor); 
    $row = $result->fetch_assoc();
    if($_SERVER['REQUEST_METHOD'] === "POST"){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $imgUrl = $_POST['imgUrl'];
        $dastor = 
    }
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
        <form action="<?php echo $_SERVER["PHP_SELF"]."?id=". $row['id']; ?>" method="post" class="h-[70%] w-[40%] border rounded-2xl p-12 flex justify-between flex-col">
            <label for="" class="font-bold ">ID:</label>
            <input name="id" value=<?php echo $row['id']; ?> type="text" class="border rounded-[5px] py-2 ">
            <br>
            <br>
             <label for="" class="font-bold ">NAME:</label>
            <input name="name" value=<?php echo $row['name']; ?> type="text" class="border rounded-[5px] py-2 ">
            <br>
            <br>
             <label for="" class="font-bold ">IMGURL:</label>
            <input name="imgUrl" type="text" value=<?php echo $row['imgUrl']; ?> class="border rounded-[5px] py-2 ">
            <button class="bg-blue-300 py-3 px-4 rounded-[5px] my-5">submet</button>
        </form>
    </div>
</body>
</html>