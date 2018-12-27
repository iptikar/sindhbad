<?php

require 'vendor/autoload.php';

require 'calculator.php';

$u = $_POST['username'] = '';
$p = $_POST['password'] = '';

 
class LoginTests extends PHPUnit\Framework\TestCase
{
    private $Login;
 
    protected function setUp()
    {
        $this->Login = new Login();
    }
 
    protected function tearDown()
    {
        $this->Login = NULL;
    }
 
    public function testAdd()
    {
        $result = $this->Login->LoginIn('bharatrose1@gmail.com', '6565656565656', 'username', 'passwdord');
        
        $this->assertEquals('HelloWorld', $result);
    }
 
}
