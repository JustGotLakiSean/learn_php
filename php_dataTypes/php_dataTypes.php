<?php
declare(strict_types=1);

// DATA TYPES (DT) //
// STRING (DT) //
// echo "This is a string";

// INTEGER //
// $age = 10;
// var_dump($age);
// echo $age;

// FLOAT //
// $pie = 3.14;
// echo $pie;
// var_dump($pie);

// BOOLEAN //
// $vaccinated = true;
// $name = "Hello, " ?: "Not Josh"; // Elvis
// if($vaccinated){
//   echo "Welcome";
// } else{
//   echo "Get Vaccinated";
// }
// echo ($vaccinated) ? "Welcome" : "Get Vaccinated";

// ARRAY //
// $arr_names = array("Josh", "Mono", "Jay");
// echo $arr_names[2]; // output: Jay
// var_dump($arr_names);

// Objects / Classes //
// class Phone {
//   // Phone properties; //
//   // attributes of Phone class //
//   private $color;
//   private $model;

//   // PHP 8: constructor promotion //
//   // no need to assign Phone properties;
//   // public function __construct(private $color, private $model)
//   // {
    
//   // }

//   public function __construct(string $color, string $model) {
//     $this->color = $color;
//     $this->model = $model;
//   }

//   public function display_message(){
//     return "My phone is a {$this->color} {$this->model}!";
//   }
// }

// $myPhone = new Phone("Gold", "iPhone"); // object instance
// echo $myPhone->display_message();

// NULL value //
// $var_null = null;
// echo $var_null; // no output display
// var_dump($var_null); // output: NULL
?>