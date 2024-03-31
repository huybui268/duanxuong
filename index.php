<?php
session_start();
ob_start();


$url = isset($_GET['url']) ? $_GET['url'] : "";
require_once "controllers/CategoryController.php";
require_once "controllers/ProductController.php";

switch ($url) {
    //sig-up & sig-in
    case '':
        if (!isset($_SESSION['user_id'])) {
            header("location: login.php");
        }
        break ;
    case 'logout':
        unset($_SESSION['id_user']);
        header("location: ?url=login");
        break;
   
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
//usser
    case 'list-user':
        $all_user->listUser();
        break;
    case 'add-user':
        $all_user->addUser();
        break;
    case 'update-user':
        $all_user->postUpdateUser();
        break;
    case 'delete-user':
        $all_user->postDeleteUser();
}
