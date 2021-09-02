<?php
declare(strict_types=1);
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
?>