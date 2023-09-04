<?php 

//array_chunk();
// array_chunk(array,size,perserve_key); 


$couples = ["aung aung","su su","nu nu","kyaw kyaw","mya mya","tun tun","maung maung","yin yin"];
echo "<pre>".print_r(array_chunk($couples,3),"true")."</pre>";
echo array_chunk($couples,3)[1][1];


echo "<pre>".print_r(array_chunk($couples,2,true),"true")."</pre>"; //0 1 2 3 4 5 6
echo "<pre>".print_r(array_chunk($couples,2,false),"true")."</pre>"; //0 1 2 3 4 5 6

echo "<hr/>";

// array_combine() Function
// array_combine(array1,array2) Function

$name = array("aung aung","su su","maung maung","hla hla");
$age = ["30","25","35","40"];

echo "<pre>".print_r(array_combine($name,$age),"true")."</pre>";

echo "<hr/>";



// array_count_values() Function
// array_count_values(array)

// $cars = ["toyota","suzuki","mazda","force"];
$cars = ["toyota","suzuki","mazda","force","suzuki","force","force"];

echo "<pre>".print_r(array_count_values($cars),"true")."</pre>";

echo "<hr/>";


// count() Function
// count(array)

$cars = ["toyota","suzuki","mazda","force","suzuki","force","force"];
echo "<pre>".print_r(count($cars),"true")."</pre>";

echo "<hr/>";


// array_diff() Function
// array_diff(array1,array2,arry3,...)
// Note:we don't need to consider for about any index key or keyname


$colors1 = ["red","green","blue","pink"];
$colors2 = ["red","blue","pink","silver"];
$colors3 = ["green","blue","orange","violet"];

echo "<pre>".print_r(array_diff($colors1,$colors2),"true")."</pre>";
echo "<pre>".print_r(array_diff($colors2,$colors1),"true")."</pre>";
echo "<pre>".print_r(array_diff($colors1,$colors3),"true")."</pre>";
echo "<pre>".print_r(array_diff($colors1,$colors2,$colors3),"true")."</pre>";

$col1 = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$col2 = array("e"=>"red","f"=>"green","g"=>"black");

echo "<pre>".print_r(array_diff($col1,$col2),"true")."</pre>";
echo "<pre>".print_r(array_diff($col2,$col1),"true")."</pre>";

echo "<hr/>";


// array_diff_assoc() Function
// array_diff_assoc(array1,array2,array3,...)
// Note:we need to consider keyname and value(just for assoc array)

$col1 = array("a"=>"red","b"=>"yellow","c"=>"blue","d"=>"green");
$col2 = array("a"=>"red","b"=>"green","c"=>"blue");

echo "<pre>".print_r(array_diff_assoc($col1,$col2),"true")."</pre>";
echo "<pre>".print_r(array_diff_assoc($col2,$col1),"true")."</pre>";

echo "<hr/>";


// array_diff_key() Function
// array_diff_key(array1,array2,array3,...)

$col1 = array("a"=>"red","b"=>"yellow","c"=>"blue","d"=>"green","f"=>"pink");
$col2 = array("a"=>"red","b"=>"green","c"=>"blue","e"=>"orange");

echo "<pre>".print_r(array_diff_key($col1,$col2),"true")."</pre>";
echo "<pre>".print_r(array_diff_key($col2,$col1),"true")."</pre>";


echo "<hr/>";


// array_intersect() Function
// array_intersect(array1,array2,array3,...) Function

$num1 = [10,20,30,60,70,80];
$num2 = array(10,20,30,40,50,90,80);

echo "<pre>".print_r(array_intersect($num1,$num2),"true")."</pre>";
echo "<pre>".print_r(array_intersect($num2,$num1),"true")."</pre>";

$col1 = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$col2 = array("a"=>"red","f"=>"green","d"=>"orange");

echo "<pre>".print_r(array_intersect($col1,$col2),"true")."</pre>";
echo "<pre>".print_r(array_intersect($col2,$col1),"true")."</pre>";

echo "<hr/>";


// array_fill() Function
// array_fill(index,number,value)

echo "<pre>".print_r(array_fill(0,5,"green"),"true")."</pre>";
echo "<pre>".print_r(array_fill(2,5,"red"),"true")."</pre>";

echo "<hr/>";

// array_fill_keys() Function
// array_fill_keys(keys,value) 

$keys = array("a","b","c","d");

echo "<pre>".print_r(array_fill_keys($keys,"black"),"true")."</pre>";

echo "<pre>".print_r($keys,"true")."</pre>";

echo "<hr/>";

// array_filter() Function
// array_filter(array,callbackfunction)

?>