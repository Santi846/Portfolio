<?php 
require_once "../config/connection.php";

class category {
    
    public function __construct(){

    }
    

    public function __insert($name, $description){
        $sql = "INSERT INTO category (nombre, description, state) VALUES ('$nombre', '$description', '1')";
        return runQuery($sql);
    }

    public function __update($idCategory, $name, $description){
        $sql = "UPDATE category SET name = '$name', description = '$description' WHERE idcategory = '$idCategory'";
        return runQuery($sql);
    }

    public function __enable ($idCategory){
        $sql = "UPDATE category SET state = '1' WHERE idcategory = '$idCategory'";
        return runQuery($sql);
    }

    public function __disable ($idCategory){
        $sql = "UPDATE category SET state = '0' WHERE idcategory = '$idCategory'";
        return runQuery($sql);
    }

    public function __showCategory($idCategory){
        $sql = "SELECT * FROM category WHERE idcategory = '$idCategory'";
        return runUniqueQuery($sql);
    }

    public function __list($idCategory){
        $sql = "SELECT * FROM category";
        return runQuery($sql);
    }
}
?>