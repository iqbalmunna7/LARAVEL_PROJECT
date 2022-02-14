<?php


namespace App\classes;


class OddEven
{
    protected $firstNumber;
    protected $lastNumber;
    protected $option;
    protected $result;

    public function __construct($post = null)
    {

    }

public function index()
    {
        for ($this->i = $this->firstNumber; $this->i <= $this->lastNumber; $this->i++) {
            echo $this->i;
        }
    }
}
public function index()
{
    for($this->i= $this->firstNumber; $this->i <=$this->lastNumber;$this->i++);
    {
        if($this->i%2==0)
        {
            $this->result .=$this->i.'';
        }
    }
    elseif
    return  $this->result;
}



