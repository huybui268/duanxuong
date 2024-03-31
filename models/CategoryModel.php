<?php 
require_once "models/db.php" ;

class CategoryModel extends db{
    public function getAllCategory(){
        $sql = "SELECT * FROM category " ;
        return $this->getData($sql, true) ;
    }

    public function getOneCategory($id){
        $sql = " SELECT * FROM category WHERE id = '$id' ";
        return $this->getData($sql, false);
    }

    public function insertCatergory($category_name){
        $sql = "INSERT INTO category(category_name) VALUES('$category_name')";
        return $this->getData($sql);
    }

    public function deleteCategory($id){
        $sql = "DELETE FROM category WHERE id= '$id'";
        return $this->getData($sql, false);
    }
    public function updateCategory($id,$category_name, $trang_thai){
        $sql = "UPDATE category SET category_name = '$category_name' , trang_thai= '$trang_thai' WHERE id = '$id'";
        return $this->getData($sql, false);
    }
}

?>