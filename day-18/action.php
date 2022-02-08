<?php
echo '<pre>';
print_r($_FILES);


if (isset($_GET['pages']))
{
    if ($_GET['pages']=='full-name')
    {
        include 'pages/FullName.php';
    }
}
else if (isset($_POST['btn']))
{
    $fullName = new FullName($_POST);

    $result=$fullName->getFullName();

    include 'pages/full-name.php';
}

