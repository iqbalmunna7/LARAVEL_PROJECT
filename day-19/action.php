<?php
require_once 'vendor/autoload.php';
use App\classes\Word;

if (isset($_GET['pages']))
{
    if($_GET['pages'] =='home')
    {
        include 'pages/home.php';
    }
}
elseif (isset($_POST['btn']))
{
$home =new Word($_POST);
$result = $home->index();
//explode($result);
extract($result);
include 'pages/home.php';

}
