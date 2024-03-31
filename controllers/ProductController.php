<?php 
require_once "models/Product.php";
require_once "models/CategoryModel.php";


class ProductController extends db{
    public $product;
    public $category ;
    
    public function __construct()
    {
        $this->product = new Product ;
        $this->category = new CategoryModel ;
       
    }
    public function listProduct(){
      
            $list_product = $this->product->getAllProduct();
            include "view/product/list.php";
       
       
    }
    public function addProduct(){
       
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $name = $_POST['name'];
            $price = $_POST['price'];
            $img_name = $_FILES['image']['name'];
            $id_category = $_POST['id_category'];

            $img_target = "images/";
            $image = $img_target.$img_name;
            move_uploaded_file($_FILES['image']['tmp_name'], $image);
            $this->product->insertProduct($name , $price , $image , $id_category );
            echo "<script>alert('thêm thành công sách')</script>";
        }
        $list_category = $this->category->getAllCategory();
        include "view/product/add.php";
   
    }

    public function postUpdateProduct(){
        $id = $_GET['id'];
        $one_product = $this->product->getOneProduct($id);
        $list_category = $this->category->getAllCategory();
        include "view/product/update.php";
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST['name'];
            $price = $_POST['price'];
            $id_category = $_POST['id_category'];
            $trang_thai = $_POST['trang_thai'];
            $img_name = $_FILES['image']['name'];
            $img_target = "images/";
            $image = $one_product['image']; // Lưu đường dẫn ảnh hiện tại
            
            if ($img_name) {
                $image = $img_target . $img_name;
                move_uploaded_file($_FILES['image']['tmp_name'], $image);
            }
    
            $this->product->updateProduct($id, $name, $price, $image, $id_category, $trang_thai);
            echo "<script>alert('Cập nhật thành công sách')</script>";
            header("location: ?url=list-product");
        }
    }

    public function postDeleteProduct(){
        $id=$_GET['id'];
        $this->product->deleteProduct($id);
        header("location: ?url=list-product");
    }
}
$all_product = new productController() ;
?>
