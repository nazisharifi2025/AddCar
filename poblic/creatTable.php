<?php
include "conniction.php";
$commind = "CREATE TABLE CARID (id INT PRIMARY KEY , name VARCHAR(50), brand VARCHAR(50) 
, model INT NOT NULL , price INT NOT NULL , stat VARCHAR(50) )";

$conniction-> query($commind);
?>