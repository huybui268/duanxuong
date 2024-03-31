<?php

require_once "models/db.php";

class Product extends db
{
    public function getAllProduct()
    {
        $sql = "SELECT p.id, p.name, p.price, p.image,p.id_category, p.trang_thai, ct.category_name
    FROM product AS p
    JOIN category AS ct 
    ON p.id_category = ct.id";
        return $this->getData($sql, true);
    }
    public function getOneProduct($id)
    {
        $sql = "SELECT * FROM product WHERE id='$id'";
        return $this->getData($sql, false);
    }
    public  function insertProduct($name, $price, $image, $id_category )
    {
        $sql = "INSERT INTO product(name, price , image  , id_category ) VALUES('$name','$price','$image','$id_category ')";
        return $this->getData($sql);
    }
    public function updateProduct($id, $name, $price, $image, $id_category , $trang_thai)
    {
        $sql = "UPDATE product SET name='$name',price='$price ',image='$image',id_category ='$id_category ',trang_thai='$trang_thai' WHERE id = '$id'";
        return $this->getData($sql, false);
    }
    public function deleteProduct($id)
    {
        $sql = "DELETE FROM product WHERE id = '$id'";
        return $this->getData($sql, false);
    }
    public function deleteProductSetCatergory($id){
        $sql = "DELETE FROM product WHERE id_category = '$id'";
        return $this->getData($sql);
    }
}
