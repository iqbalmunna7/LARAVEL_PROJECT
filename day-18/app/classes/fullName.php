<?php


namespace App\classes;


class FullName
{
    public $firstName;
    public $lastName;
    public function  __construct($data)
    {
       // echo '<pre>';
       // print_r($data);
       // echo $data['first_name'];
        //exit();
        if ($data)
        {
            $this->firstName =$data['first_name'];
            $this->lastName =$data['last_name'];

        }


    }
    public function index()
    {
        header('Location:action.php?pages=full-name');
    }
    public function getFullName()
    {
        $result = $fullName->getFullName();

    }


}