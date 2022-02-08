<!-- <?php


namespace App\classes;


class Example
{
    public $name;
    public $data = [];

    public function __construct($data)
    {

    }

    public function index()

    {
//        $this->data = [
//            0 => ['name' => 'sagor',
//                'email' => 'sagor2gmail.com',
//                'mobile' =>
//                    [
//                        'personal' => '654321',
//                        'gurdian' => '60844'
//                    ]
//            ],
//            1 => [
//                'name' => 'masum',
//                'email' => 'masum@gmail.com',
//                'mobile' =>
//                    [
//                        'personal' => '6543245t41',
//                        'gurdian' => '60823434'
//                    ]
//            ],
//            2 => 'BITM',
//            3 => [
//                'name' => 'mamun',
//                'email' => 'mamun@gmail.com',
//                'mobile' =>
//                    [
//                        'personal' => '4344654321',
//                        'gurdian' => '5455460844'
//                    ]
//            ],
//        ];
        //  echo $this->data[3];
        //  foreach ($this->data as $key=> $item)
        //  {
        //    echo $key .' '.$item.'<br/>';
        //  }

//echo $this->data[0]['name'];

       // foreach ($this->data as $item)
        //{
     //       if (is_array($item))
     //       {
         //       foreach ($item as $value)
          //      {
         //           if (is_array($value))
          //     {
                //        foreach ($value as $v_value) ;
              //          {
             //               echo $v_value . ' ';
            //            }

           //         } else {
          //              echo $value . ' ';
         //           }
         //       }
          //  }
          //  else
          //      {
          //      echo $item;
           //     }

            //echo '<br/>';
      //  echo '<pre>';
        //print_r($this->data);
        //var_dump($this->data);
        header('Location:action.php?pages=full-name');
        }
    }






