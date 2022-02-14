<?php


namespace App\classes;


class Series
{
    protected $startingNumber;
    public $endingNumber;
    protected $type;
    protected $i;
    protected $result;
    protected $tempStart;
    protected $tempEnd;

    public function __construct($data = null)
    {
        $this->startingNumber = $data['starting_number'];
        $this->endingNumber = $data['ending_number'];
    }

    public function index()
    {
//        for($this->i = $this->startingNumber; $this->i <= $this->endingNumber;$this->i++)
//        {
//            $this->result.=$this->i.'';
//        }
//        for($this->i = $this->startingNumber; $this->i >= $this->endingNumber;$this->i--)
//        {
//            $this->result.=$this->i.'';
//        }

        if ($this->type=='desc')
        {
            if ($this->startingNumber > $this->endingNumber)
            {
                $this->startingNumber = $this->endingNumber;
                $this->tempStart = $this->startingNumber;
                $this->tempEnd = $this->endingNumber;
            }
            else
            {
                $this->tempStart =$this->endingNumber;
                $this->tempEnd =$this->startingNumber;
            }
            for ($this->i =$this->tempStart; $this->i >= $this->tempEnd; $this->i--)
            {
                $this-> .= $this->i. '';
            }
        }
        else if ($this->type =='asc')
        {
            if ($this->startingNumber < $this->endingNumber)
            {
                $this->tempStart = $this->endingNumber;
                $this->tempEnd = $this->startingNumber;

            }
            for ($this->i =$this->tempStart;$this->i <= $this->tempEnd;$this->i--)
        }



//        }
//        for($this->i = 5; $this->i >=1; $this->i--)
//        {
//            $this->result.=$this->i.'';
//        }
        return$this->result;
    }

}