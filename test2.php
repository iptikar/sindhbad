<?php

//setcookie('buyershipping7522', '', time() -3600, '/', $_SERVER['SERVER_NAME']);
$var = ['a', 'b', 'c'];

unset($var[1]);

sort($var);
print_R($var);
