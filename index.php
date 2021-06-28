
<?php
# Mono Crisostomo Ibarra #

# Variables #

// $fname = 'Mono';
// $mname = 'Crisostomo';
// $lname = 'Ibarra';
// $age = '19';

// echo "First name: $fname <br>";
// echo "Middle name: $mname <br>";
// echo "Last name: $lname";

# Variable Scope #

// LOCAL SCOPE //
// function sayHi()
// {
//   $name = "Josh"; // local variable
//   echo "Hi, $name<br>";
// }

// sayHi();
// echo $name;

// GLOBAL SCOPE //
// $name = "mono"; // GLOBAL VARIABLE
// function sayHi()
// {
//   global $name; // Accessing the global variable "$name"
//   echo "Hi, $name";
// }

// sayHi();

# Arithmetic perators #

// $num1 = 10;
// $num2 = 3;
// $sum = $num1 + $num2;
// $dif = $num1 - $num2;
// $prod = $num1 * $num2;
// $quo = $num1 / $num2;
// $rem = $num1 % $num2;

// echo "SUM: $sum <br>";
// echo "DIFFERENCE: $dif <br>";
// echo "PRODUCT: $prod <br>";
// echo "QUOTIENT: $quo <br>";
// echo "MODULO: $rem";



// $a = '1';
// $b = &$a; // '1'; type="string"
// $b = "2$b"; // '21'; type="string"
// echo $a . ', ' . $b;
// echo gettype($b); // string
// $c = $a + $b;
// echo gettype($c); // integer
// echo gettype($a); // string
// echo $a;

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

/* ########## ########## */

/* ########## STRINGS AND STRING FUNCTIONS ########## */
// $name = "Hello World";
// echo strlen($name); // output: 11
// echo mb_strlen($names, 'UTF-8'); // output: 11
// $names = array("Josh", "Bill", "Matthias");
// foreach($names as $name){
//   echo mb_strlen($name, 'UTF-8') . '<br>';
//   // output: 4
//   // output: 4
//   // output: 8
// }
// $mess = "んに";
// echo strlen($mess); // output: 6 (bytes)
// echo mb_strlen($mess); // output: 2 (number of characters)
// $word_count = "String Functions";
// echo "Message: \"$word_count\" <br>";
// echo 'Word Count: ' . str_word_count($word_count) . '<br>'; // output: 2 (words)
// echo 'Offset = 0,  Length = 3 || Result: ' . substr($word_count, 0, 3); // output: 'Str'
// echo 'Offset = 4, Length = 1 || Result: ' . substr($word_count, 4, 1); // output: 'n'
// echo 'Offset = 3, no length || Result: ' . substr($word_count, 3); // output: 'ing Functions' (S = 0, t = 1, r = 2, i = 3)
// echo 'Offset = -2, no length || Resutl: ' . substr($word_count, -2); // output: 'ns'
// echo 'Offset = -3, Length = 2 || Result: ' . substr($word_count, -3, 2); // output: 'on'
// echo 'Offset = -4, Length = -3 || Restult: '. substr($word_count, -4, -3); // output: 'i'
// echo strrev($word_count); // output: snoitcnuF gnirtS
// echo stripos($word_count, "Functions"); // output: 7
// echo str_replace("ing", "ong", $word_count); // output: Strong Function
// $message = array("This","is","a","message.");
// echo implode(" ", $message) . '<br>'; // output: This is a message
// echo implode(", ", $message) . '<br>';
// $random_words = "I don't have the intention to eat that much";
// $sample_link = "https://www.phptutorial.net/php-tutorial/php-trim/";
// print_r(explode("a", $random_words, 2)); // output: Array ( [0] => I don't h [1] => ve the intention to eat that much )
// var_dump(explode("a", $random_words, -2)); // output: array(2) { [0]=> string(9) "I don't h" [1]=> string(21) "ve the intention to e" }
// echo 'a as separator: <br>';
// var_dump(explode("a", $random_words)); // output: array(4) { [0]=> string(9) "I don't h" [1]=> string(21) "ve the intention to e" [2]=> string(4) "t th" [3]=> string(6) "t much" }
// echo trim($sample_link, '/'); // output: https://www.phptutorial.net/php-tutorial/php-trim
// echo trim($random_words, "Ih"); // output: don't have the intention to eat that muc
// echo ltrim($random_words, "I"); // output: don't have the intention to eat that much
// $sample_script = '<a href="test" onclick="log();">Test</a>';
// $sample_text = "This is a sample text with ampersand&& ** <><><";
// echo "This is a sample script: {$sample_script} <br>";
// echo "This is a sample text: {$sample_text} <br>";
// echo htmlspecialchars($sample_script, ENT_QUOTES) . '<br>';
// echo htmlspecialchars($sample_text, ENT_QUOTES);
// echo str_contains("Func", $word_count); // PHP 8 along with str_starts_with() and str_ends_with()
// echo strtolower($word_count); // output: string functions
// echo strtoupper($word_count); // output: STRING FUNCTIONS
// echo ucfirst($word_count);
// echo ucwords($word_count);
// echo strip_tags($sample_script, 'a'); // output: Test

// Concatinate Assignment Operator ".=" //
// $fname = "Josh";
// $lname = "Mono";

// $fname .= $lname;
// echo $fname;

/* ########## ########## */

/* ########## Control Flow ########## */
/* if statement */

$is_admin = true;
$can_edit = false;
$btn_type = 'button';
// if($is_admin) {
//   echo "Your are an admin.";
//   $can_edit = true;
// }

// if($can_edit){
//   echo "Your can edit.";
// }

// Nesting If and embedding HTML //
// if($is_admin) {
//   echo "<p>Hello <strong>Admin</strong</p><br>";
//   $can_edit = true;
//   if($can_edit){
//     echo "<input type='$btn_type' value='Edit'/>";
//   }
// }
?>