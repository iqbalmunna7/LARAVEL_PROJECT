<?php
namespace App\classes;



class Example
{


    //public $firstNumber = 10;
    //public $firstName ="iqbal";
    //public $lastName ="munna";
    public $firstNumber;
    public $firstName ;
    public $lastName;


    public function index ()
    {

        echo $this->firstNumber ="20";
        $this->firstName ="IQBAL";
        $this->lastName ="MUNNA";

        // echo $this->firstNumber;
        // echo $this->firstName;
        // echo "hello world"
        // echo $this->lastName;

       echo '<br/>';
       echo $this->firstName;
       echo'<br/>.';
       echo $this->lastName;
       echo '<br/>';
       echo $this->firstName.$this->lastName;

    }
}