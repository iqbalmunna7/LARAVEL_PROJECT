<?php

require_once 'vendor/autoload.php';
use App\classes\Category;
use App\classes\Products;


if (isset($_GET['pages']))
{
    if ($_GET['pages'] == 'all-products')
    {
        $category = new Category();
        $categories = $category->category();
        $products = new Products();
        $products = $products->index();

        include 'pages/allProducts.php';
    }
    elseif ($_GET['pages'] == 'category-products')
    {
        $category = new Category();
        $categories = $category->category();
        $product = new Products();
        $products = $product->shortProducts($_GET['category_id']);
        include 'pages/allProducts.php';
    }
    elseif ($_GET['pages'] == 'product-details')
    {
        $category = new Category();
        $categories = $category->category();
        $product = new products();
        $prodctDetails = $product->getProductDetails($_GET'product_id');
        include 'pages/productDetails.php';
    }
}


