<?php


namespace App\classes;


class Word
{
    protected $inputValue;
    protected $type;
    protected $result;
    public function __construct($POST)
    {
//        echo '<pre>';
//        print_r($post);
//        exit();
    //    $this->inputValue = $post['input_value'];

//        echo 'hfehfhe';
//        echo $POST['input_value'];
        $this->inputValue = $POST['input_value'];

    }

    public function index()
    {
//        if ($this->type =='word')
//        {
//            $this->result = str_word_count($this->inputValue);
//        }
//        else
//        {
//            $this->result = strlen($this->inputValue);
//
//        }

        $this->result = [
            'givenWord' => 'given Word'.$this->inputValue,
            'wordCount' => 'total word'.str_word_count($this->inputValue),
            'characterCount' => 'total character'.strlen($this->inputValue),
        ];

        // echo $this->inputValue;
//        $this->result = str_word_count($this->inputValue);
//        echo strlen($this->inputValue);

        return $this->result;
    }

}