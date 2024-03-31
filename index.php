<?php
session_start();
ob_start();


$url = isset($_GET['url']) ? $_GET['url'] : "";
require_once "controllers/CategoryController.php";
require_once "controllers/ProductController.php";

switch ($url) {
//category
    case 'list-category':
        $all_catergory->listCatergory();
        break;
    case 'add-category':
        $all_catergory->addCategory();
        break;
    case 'update-category':
        $all_catergory->postUpdateCategory();
        break;
    case 'delete-category':
        $all_catergory->postDeleterCategory();
        break;
//product
    case 'list-product':
        $all_product->listProduct();
        break;
    case 'add-product':
        $all_product->addProduct();
        break;
    case 'update-product':
        $all_product->postUpdateProduct();
        break;
    case 'delete-product':
        $all_product->postDeleteProduct();

}
