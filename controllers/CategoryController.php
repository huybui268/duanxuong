<?php 
require_once "models/CategoryModel.php";
require_once "models/Product.php";



class CatergoryController {
    public $category ;
    public $product;

    public function __construct()
    {
        $this->category = new CategoryModel();
        $this->product = new Product();
       
        
    }
    public function listCatergory(){
        
            $list_category = $this->category->getAllCategory() ;
            include "view/Category/list.php";
        
        
    }
    public function addCategory(){
       
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $category_name = $_POST['category_name'];
            $this->category->insertCatergory($category_name);
            echo "<script>alert('Thêm thành công');</script>";
        }
        include "view/Category/add.php";

    }
    public function postDeleterCategory(){
        $id = $_GET['id'];
        $this->product->deleteproductSetCatergory($id);
        $this->category->deleteCategory($id);
        header("location: ?url=list-category");
    }
    public function postUpdateCategory(){
        $id = $_GET['id'];
        $one_category = $this->category->getOneCategory($id);
        include "view/Category/update.php";

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $category_name = $_POST['category_name'];
            $trang_thai= $_POST['trang_thai'];
            $this->category->updateCategory($id,$category_name, $trang_thai);
            echo "<script>alert('Cập nhật danh mục thành công')</script>";
            header("location: ?url=list-category");
        }
        
    }
}

$all_catergory = new CatergoryController ;
?>

