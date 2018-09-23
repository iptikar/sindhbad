<?php
$pattern = '/[\s\S](?=[0-9])/u';
$val = 'dfdf5665';

echo preg_match($pattern, $val);

?>
  
