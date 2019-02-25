<?php

$lan = $_POST['lan'];

setcookie('lanSindhbad', $lan, time() +3600, '/', $_SERVER['SERVER_NAME']);