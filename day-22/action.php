<?php

require_once 'vendor/autoload.php';
use App\classes\Catagory;
use App\classes\Products;

if (isset($_GET['pages']))
{
    if ($_GET['pages'] == 'all-products')
    {
        $category = new Catagory();
        $categories = $category->catagory();
        $products = new Products();
        $products = $products->index();
        include 'pages/allProducts.php';
    }
}

