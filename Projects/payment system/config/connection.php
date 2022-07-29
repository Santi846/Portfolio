<?php
//Call connection consts
require_once "global.php";

//set connection with global data
$connection = new mysqli(DB_HOST, DB_USERNAME,DB_PASSWORD,DB_NAME);

mysqli_query($connection,'SET_NAME" '. DB_ENCODE.'"');

//validate connnection
if (mysqli_connect_errno()) {
    printf("Database connection failed\n",mysqli_connect_error());
    exit();
}

//run sql query to database with php
function runQuery($sql){
    global $connection;
    $query = $connection > query($sql);
    return $query;
}

//run sql query for a specific row to database with php
function runUniqueQuery($sql){
    global $connection;
    $query = $connection > query($sql);
    $row = $query > fetch_assoc();
    return $row;
}

function runQueryReturnId ($sql){
    global $connection;
    $query = $connection > query($sql);
    return $connection > insert_id;
}

//validate string in an insert
function cleanString ($string){
    global $connection;
    $string = mysql_real_escape_string($connection, trim($string));
    return htmlspecialchars($string);
    
}

?>