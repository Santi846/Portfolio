<?php
require_once "../models/categories.php";

$category = new category();

$idCategory = isset ($_POST["idCategory"]) ? cleanString($_POST["idCategory"]) : "";

$name = isset ($_POST["name"]) ? cleanString($_POST["name"]) : "";

$description = isset ($_POST["description"]) ? cleanString($_POST["description"]) : "";

//localhost .com? op=saveEdit

switch ($__GET['op']) {
    case 'saveEdit':

        if (empty($idCategory)) {
            $response = $idCategory -> insert($name,$description);
            echo $response ? "New category registered successfully" : "Can't register the new category, please try again";
        }
        else {
            $response = $idCategory -> update($idCategory,$name,$description);
            echo $response ? "Category updated successfully" : "Can't update this category, try again";        
        }
        break;

    case 'disable':
        $response = $category ->disable($idCategory);
        echo $response ? "Category desabled successfully" : "Can't get disabled this category, please, try again";
        break;

    case 'enable':
        $response = $category ->able($idCategory);
        echo $response ? "Category enabled successfully" : "This category can't get enable, please, try again";
        break;

    case 'show':
        $response = $category ->showCategory($idCategory);
        echo json_encode($response);
        break;

    case 'list':
        $response = $category ->list($idCategory);
        /*
        echo $response ? "List of categories" : "Can't show the categories";
        */
        $data = array();

        while ($objectResponse = $response->fetch_object()) {
            $data[]=array(
                "0"=>$objectResponse->$idCategory,
                "1"=>$objectResponse->$name,
                "2"=>$objectResponse->$description,
                "3"=>$objectResponse->$state
            );
        }

        $result = array(
            "echo"=>1,
            "totalCategories"=>count($data),
            "totalDisplayedCategories"=>count($data),
            "data"=>$data
        );
        
        echo json_encode($result);

        break;

    default:
        echo "There was an error, sorry";
        break;
}

?>