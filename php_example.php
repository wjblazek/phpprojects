<?php
//echo "Start php_example.php\n";
$str1 = 'This is an demo of PHP used to write a simple HTML webpage';
$str2 = 'PHP is a popular general-purpose scripting language that is especially suited to web development.';
$str3 = 'This paragraph is bolded.<br>Fast, flexible and pragmatic, PHP powers everything from your blog to the most popular websites in the world.';
$str4 = 'When PHP parses a file, it looks for opening and closing tags, which are <?php and ?> which tell PHP to start and stop interpreting the code between them. Parsing in this manner allows PHP to be embedded in all sorts of different documents, as everything outside of a pair of opening and closing tags is ignored by the PHP parser.';

//echo "str1=$str1\n";
//echo "str1=$str2\n";
//echo "str1=$str3\n";

//$str1array = preg_split("/[\s,]+/", $str1 );
//echo "str1array=$str1array:\n";
//var_dump($str1array);
//echo "print_r str1array=$str1array:\n";
//print_r($str1array);

//$output = "<html> <p> $str1 </p><p> <b>$str2 </b></p><p> $str3 </p></html>";
$output = "<html>";
$output = $output . "<p> $str1 </p>";
$output = $output . "<p> $str2 </p>";
$output = $output . "<p> <b>$str3 </b></p>";
$output = $output . "<p> $str4 </p>";
//$output = $output . "<p> concatonated </p>";

// begin some form fields
$output = $output . "<form action='/get_action_page.php' method='get'>";
$output = $output . "<p>First a couple text fields:</p>";
$output = $output . "<input type='text' name='firsttextfield'><br>";
$output = $output . "<input type='text' name='secondtextfield'><br><br>";
$output  = $output . "</form>";

$output = $output . "<form action='/post_action_page.php' method='post'>";
$output = $output . "<p>Now some radio buttons:</p>";
$output = $output . "<input type='radio' name='radio1' value='radio1'> radio1<br>";
$output = $output . "<input type='radio' name='radio2' value='radio2'> radio2<br>";
$output = $output . "<input type='radio' name='radio3' value='radio3'> radio3<br>";

$output = $output . "<p>Now a submit button:</p>";
$output = $output . "<input type='submit' value='Submit'>";

$output  = $output . "</form>";

$output = $output . "</html>";
echo $output;
//echo "End php_example.php\n";
