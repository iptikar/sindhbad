<?php
class Palindrome
{
    public static function isPalindrome($word)
    {
        // Revere the string 
        $reverse_string = strrev($word);
        
        // Compare with ==
        if(strtolower($reverse_string) == strtolower($word)) 
        {
			 return true;
			}
	
			
       return false;
    }
}

//echo Palindrome::isPalindrome('Deleveled');


<?php
class FileOwners
{
    public static function groupByOwners($files)
    {
        return NULL;
    }
}

$files = array
(
    "Input.txt" => "Randy",
    "Code.py" => "Stan",
    "Output.txt" => "Randy"
);

var_dump(FileOwners::groupByOwners($files));
