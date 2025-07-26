<?php
include "connect.php";

$CreatTable = "CREATE TABLE user_file(id INT PRIMARY KEY,name VARCHAR(50),imgUrl VARCHAR(120) )";

// $conniction ->query ($CreatTable);
if ($conniction ->query($CreatTable) === TRUE) {
    echo "Table created successfully.";
} else {
    echo "Error creating table: " . $connect->error;
}
?>