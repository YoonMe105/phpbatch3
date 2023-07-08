<?php

// setcookie('thb','Thai Baht',time()+(86400*5));  // 5days
// echo "Cookies Set Successfully";

// =>Syntax (Note :: gone after browser end)
// setcookie('cookiename','value',expire,path);

setcookie('thb','Thai Baht',time()+(86400*5),'/');  // 5days
// setcookie('thb','Thai Baht',time()+(86400*5),'/','https://www.abc.com');  // 5days
echo "Cookies Set Successfully";


?>


