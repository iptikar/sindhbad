<?php
 
// Start profiling
$start = microtime(true);
 

 
// Adjust session config
ini_set('session.save_path', __DIR__ . '/sessions/');
ini_set('session.gc_probability', 1);
ini_set('session.gc_divisor', 10);
ini_set('session.gc_maxlifetime', 3000);
 
// Init session
session_start();

session_regenerate_id();
 
// End profiling
$duration = (microtime(true) - $start);
 
// Output the data
echo number_format($duration, 12) . PHP_EOL;
