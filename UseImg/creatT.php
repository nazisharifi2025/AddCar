<?php
include "connect.php";

$CreatTable = "CREATE TABLE (id INT PRIMARY KEY,name VARCHAR(50).imgUrl VARCHAR(120) )";

$connect->query($CreatTable);

?>