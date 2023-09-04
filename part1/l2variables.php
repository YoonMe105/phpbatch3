<?php

// Variables
// variable scope
// (i)Global Variable Scope 
// (ii)Local Variable Scope
// (iii)Static Variable Scope

$fullname = 'U Kyaw Kyaw';
$job = 'Developer';

echo $fullname;
print $job;
echo "$fullname"; //result = U Kyaw Kyaw;
echo '$fullname'; //result = $fullname

echo "<br/>";

echo "My name is                        $fullname"; //result = My name is U Kyaw Kyaw;
echo "<br/>";
echo "My name is ${fullname}"; //result = My name is U Kyaw Kyaw;
echo "<br/>";
echo 'My name is ${fullname}'; //result = My name is $fullname
echo "<br/>";
echo "I am {$job}"; //result = I am Developer

echo "<hr/>";

echo 'He\'s my father, he is a $job'; // result = He's my father, he is a $job
echo "<br/>";
echo "He's my father, he is a \$job"; // result = He's my father, he is a $job
echo "<br/>";
echo "He's my father, he is a \${job}"; // result = He's my father, he is a ${job}
echo "<br/>";
echo "He's my father, he is a \{$job}"; // result = He's my father, he is a \{Developer}
echo "<br/>";
echo "He's my father, he is a {\$job}"; // result = He's my father, he is a \{$job}
echo "<br/>";

echo "<hr/>";

$gender = print 'female'; //result = female
// $nation = echo 'burma'; // error

echo "<hr/>";



// Concat (.)
$firstname = "Aung";
$lastname = 'Kyaw Kyaw';

echo $firstname;
echo $lastname;
echo "<br/>";
echo $firstname.$lastname;
echo "<br/>";
echo $firstname.' '.$lastname;


//Comments

#Single Line Comment


/*Multi Line Comment
comment 1
comment 2
comment 3*/

echo "<hr/>";

// ---------------------------------


// =>Constant Variable 

// define('variablename','value');
// Note:: string/int/boolean/float oki
// variable name should be uppercase
// redefind are deny(can't override)

define('FULLNAME','Honey Nway Oo');
echo FULLNAME;  // Honey Nway Oo

echo "<br/>";

define('FULLNAME','Ma Ma Mya');
echo FULLNAME;  // Honey Nway Oo

echo "<br/>";


define("DB_HOST","localhost");
define("DB_USER","root");
define("DB_PASS","");
define("DB_NAME","phpdbone");

echo DB_HOST;
echo "<br/>";
echo DB_USER;
echo "<br/>";
echo DB_PASS;
echo "<br/>";
echo DB_NAME;
echo "<br/>";

// =>constant('name') Function

echo constant("DB_HOST");
echo "<br/>";
echo constant("DB_USER");
echo "<br/>";
echo constant("DB_PASS");
echo "<br/>";
echo constant("DB_NAME");
echo "<br/>";


// =>constant : const keyword
// Note:: string/int/boolean/float oki
// variable name should be uppercase
// redefind are deny(can't override)

const MESSAGE = 'Hello sir, are you ready to learn PHP OOP concept ??';
echo MESSAGE;  // Hello sir, are you ready to learn PHP OOP concept ??
echo "<br/>";
echo constant("MESSAGE");  // Hello sir, are you ready to learn PHP OOP concept ??

echo "<br/>";

const MESSAGE = 'Hello sir, are you ready to learn Javascript ES6 concept ??';
echo MESSAGE;   // Hello sir, are you ready to learn PHP OOP concept ??
echo "<br/>";
echo constant("MESSAGE");   // Hello sir, are you ready to learn PHP OOP concept ??












?>


