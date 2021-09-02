<?php
// declare(strict_types=1);

// PHP Version: 7.2.6 //
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

// $mess = "MonoIbarra";
// echo substr($mess, -5, 3); // output: 'bar'

// Concatinate Assignment Operator ".=" //
// $fname = "Josh";
// $lname = "Mono";

// $fname .= $lname;
// echo $fname;

/* ########## ########## */

/* ########## Control Flow ########## */
/* if statement */

// $user = null;
// $is_admin = false;
// $can_edit = false;
// $btn_type = 'button';
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

/* if-else statement */
// $user = 'Not Josh';
// if($user === 'Josh'){
//   $is_admin = true;
//   echo "<p>Hello <strong>Admin</strong</p><br>";
// } else {
//   echo "<p>Unknown user.</p>";
// }

/* if-elseif */
// $user = "Mono";
// if($user === 'Josh'){
//   $is_admin = true;
//   echo "<p>Hello <strong>Admin Josh</strong</p><br>";
// } else if($user === 'Mono') {
//   $is_admin = true;
//   echo "<p>Hello <strong>Admin Mono</strong</p><br>";
// }

/* Ternary Operator */
// $user = "Josh";
// $admin_message = ($user === "Josh") ? "Hello, admin $user" : "Unknown User";
// echo $admin_message;
// $gender = 'm'; // 'm' or 'f'
// $rev_gender = $gender === 'm' ? "Male" : "Female";
// echo $rev_gender; // output: Male
// $admin = "Hello $user" ?: "No user";
// echo $admin;

/* Switch statement */
// $grade = 70;
// echo "Grade: $grade <br>";
// switch ($grade):
//   case 75:
//   case 80:
//     echo "<strong>Good!</strong>";
//     break;
//   case 85:
//   case 90:
//     echo "<strong>Better!</strong>";
//     break;
//   case 95:
//   case 100;
//     echo "<strong>Best!<strong>";
//     break;
//   default:
//     echo "<i style='color: red;'>Better luck next time!</i>";
//     break;

// endswitch;

/* for loop */
// $counter = 0;
// $initialize = 1;
// $init_condition = 15;

// echo "Initialize value: $initialize <br>";
// echo "Condition: $init_condition <br>";
// for($i = $initialize; $i <= $init_condition; $i++){
//   $counter += $i;
// }
// echo $counter . '<br>';

// for($i = $initialize; $i <= $init_condition; $i++):
//   echo $i . '<br>';
//   break;
// endfor;

// function is_greater(int $a, int $b) : bool
// {
//   return $a > $b;
// }

// echo is_greater(10, 4) ? "True" : "False";

// for($i = 1; ; $i++):
//   if($i > 10){
//     break;
//   }
//   echo $i; // output: 12345678910
// endfor;

/* while loop */
// function is_valid_age(int $age, int $valid_age = 18) : bool
// {
//   return $age >= $valid_age;
// }

// $age = 20;
// $is_adult = false;
// echo "<p>Your Age: $age</p>";

// if(is_valid_age($age)){
//   $is_adult = true;
//   while($is_adult){
//     echo "You are an adult";
//     break;
//   }
// } else {
//   echo "You are not an adult";
// }

/* do-while */
// $i = 0;
// do {
//   echo $i++;
// } while ($i <= 10);

/* FUNCTIONS */
/* User Defined Function */
// function sayHi() : string
// {
//   return "Hi!";
// }
// echo sayHi(); // output: Hi!

// Coercive Function Mode (default) //
// function add_numbers(int $num1, int $num2) : int
// {
//   return $num1 + $num2;
// }
// echo add_numbers('2', 2); // output: 4;
// php automatically converts string into int as needed as PHP is a loosely-typed language.

// String Function Mode //
// declare(strict_types = 1); at the very beginning //
// function divide_two_numbers(int $num1, int $num2): int
// {
//   return $num1 / $num2;
// }
// // echo divide_two_numbers('3', 3); // output: Uncaught TypeError
// echo divide_two_numbers(3, 3); // output: 1

// function display_full_name(string $first_name, string $last_name): string
// {
//   return "$first_name $last_name";
// }
// echo display_full_name("Josh", "Mono"); // Josh Mono

// Null Coalescing Operator //
// $input_name = null;
// $name = $input_name ?? 'No Name Given.';
// echo $name;

// Trailing comma //
// function display_user_info(
//   string $first_name,
//   string $middle_name,
//   string $last_name,
//   int $age
// ) {
//   return "$first_name $middle_name $last_name, $age";
// }

// echo display_user_info(ucfirst("Josh"), ucfirst("Mono"), ucfirst("ibarra"), 20);

// Pass-by-reference //
// function addFive(int &$num): void
// {
//   $num += 5;
// }

// $number = 10;
// echo "<p>Previous Value of Number: $number</p>";
// addFive($number);
// echo "<p>Update value of Number after pass by reference: $number</p>";

// Pass by value //
// function addFive(int $num): int
// {
//   $num += 5;
//   return $num;
// }
// $number = 10;
// echo addFive($number);
// echo "<p>$number</p>";

// Default Argumnent //
// function display_names(string $first_name, string $middle_name, string $last_name): string
// {
//   return "First name: $first_name, Middle name: $middle_name, Lastname: $last_name";
// }

// $fname = "Josh";
// $mname = null;
// $lname = "Mono";

// echo display_names($fname, is_null($mname) ? "y" : $mname, $lname); // output: First name: Josh, Middle name: y, Lastname: Mono

// Default Parameters //
// function display_grade($first_sem, $second_sem, $third_sem = "No Grade Yet"): string
// {
//   return "First sem: $first_sem, Sec sem: $second_sem, Third sem: $third_sem";
// }
// echo display_grade("80", "90"); // output: First sem: 80, Sec sem: 90, Third sem: No Grade Yet

// Variable-length argument lists //
// function display_user_info(...$arr_info)
// {
//   return print_r($arr_info);
// }

// echo display_user_info("Josh", "Mono", 20);

// Foreach //

// $loan_5k_account = array(
//   $civilian_borrower = array('Bill', 'Josh'),
//   $officer_borrower = array('Steve', 'Mono')
// );

// $top_artist = [
//   '1' => 'Me',
//   '2' => 'You',
// ];

// foreach($top_artist as $top => $artist)
// {
//   echo "<p>Top $top: $artist</p>";
// }

// Variable Function //
// function get_sum(int $num1, int $num2): int
// {
//   return $num1 + $num2;
// }

// $add = 'get_sum';
// echo $add(3, 4);

// Anonymous function (Closures) //
// $authenticated = true;
// $success_message = function($is_authenticated) {
//   return ($is_authenticated) ? "Hello" : "Not Authenticated";
// };

// echo $success_message($authenticated);

// Inheret the $first_name variable using //
// the "use" language construct //
// $first_name = "Mono";
// $display_name = function() use ($first_name): string {
//   return $first_name;
// };

// echo $display_name();

// ARROW FUNCTION: PHP 7.4 and up //
// $message = fn() => "Hello World";
// echo $message();
// $display_name = fn($name): string => "My name is $name";
// echo $display_name("Josh");
// $get_sum = fn(int $num1, int $num2): int => ($num1 + $num2);
// echo $get_sum(3, 5);

// $a = 5;
// echo ++$a . "<br>";
// echo $a++;

// match
// $my_name = 'Josh';
// $name = match($my_name) {
//   "Josh" => 'HELLO Josh',
//   "Mono" => 'HELlo Mono',
//   default => 'Unknown User',
// };
// echo $name;

// CONSTANT VARIABLE
// define('NUMBER', 10e4);
// echo gettype(NUMBER); // double
// const ZIPCODE = 1700;
// echo ZIPCODE;


?>