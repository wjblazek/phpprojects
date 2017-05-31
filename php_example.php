<?php
//echo "Start php_example.php\n";
$str1 = 'PHP is a popular general-purpose scripting language that is especially suited to web development.';
$str2 = 'This paragraph is bolded.  Fast, flexible and pragmatic, PHP powers everything from your blog to the most popular websites in the world.';
$str3 = 'When PHP parses a file, it looks for opening and closing tags, which are <?php and ?> which tell PHP to start and stop interpreting the code between them. Parsing in this manner allows PHP to be embedded in all sorts of different documents, as everything outside of a pair of opening and closing tags is ignored by the PHP parser.';

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
$output = $output . "<p> <b>$str2 </b></p>";
$output = $output . "<p> $str3 </p>";
$output = $output . "<p> concatonated </p>";
$output = $output . "</html>";
echo $output;
//echo "End php_example.php\n";
