<?php


require_once 'vendor/autoload.php';
use App\classes\Calculator;



//print_r($_POST);
//exit();


if (isset($_GET['pages']))
{
    if ($_GET['pages'] == 'home')
    {
        include 'pages/home.php';
    }


}

elseif(isset($_POST['btn']))
{
    $calculator = new Calculator($_POST);
    $result = $calculator->index();
    include 'pages/home.php';

}
elseif ( ($_GET['pages']=='odd'))
{
    if($_GET['pages'])
    {
        include 'pages/odd.php';
    }
}
elseif (isset($_POST['btn']))
{

}