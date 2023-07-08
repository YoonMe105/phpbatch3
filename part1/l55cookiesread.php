<?php

    echo "<pre>".print_r($_COOKIE,true)."</pre>";

    if(isset($_COOKIE['mmk'])){
        echo "mmk stand for ".$_COOKIE['mmk']."<br/>";
    }
?>