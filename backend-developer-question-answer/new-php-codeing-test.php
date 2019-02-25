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


class FileOwners
{
    public static function groupByOwners($files)
    {
		// Return array 
		$return = [];
		
		foreach ($files as $key => $value ) {
			
				$return [$value][] = $key;
			}
			
		return $return ;
    }
}

$files = array
(
    "Input.txt" => "Randy",
    "Code.py" => "Stan",
    "Output.txt" => "Randy"
);

//echo "<pre>";
//print_R(FileOwners::groupByOwners($files));


/*
 * 
Implement the unique_names function. When passed two arrays of names, it will return an array containing the names that appear in either or both arrays. The returned array should have no duplicates.

For example, calling MergeNames::unique_names(['Ava', 'Emma', 'Olivia'], ['Olivia', 'Sophia', 'Emma']) should return ['Emma', 'Olivia', 'Ava', 'Sophia'] in any order.


 * */

class MergeNames
{
    public static function unique_names($array1, $array2)
    {
		// Merge array 
       $mergearray = array_merge($array1, $array2);
       
       // Remove duplicated value 
       return array_unique($mergearray);
    }
}

$names = MergeNames::unique_names(['Ava', 'Emma', 'Olivia'], ['Olivia', 'Sophia', 'Emma']);
//echo join(', ', $names); // should print Emma, Olivia, Ava, Sophia

/*
 * As part of a data processing pipeline, complete the implementation of the make_pipeline method:

The method should accept a variable number of functions, and it should return a new function that accepts one parameter $arg.
The returned function should call the first function in the make_pipeline with the parameter $arg, and call the second function with the result of the first function.
The returned function should continue calling each function in the make_pipeline in order, following the same pattern, and return the value from the last function.
For example, Pipeline::make_pipeline(function($x) { return $x * 3; }, function($x) { return $x + 1; }, function($x) { return $x / 2; }) then calling the returned function with 3 should return 5.
 * */
 
class Pipeline {
    public static function make_pipeline(...$funcs)
    {
        return function($arg) use ($funcs)
        {
            return NULL;
        };
    }
}

$fun = Pipeline::make_pipeline(function($x) { return $x * 3; }, function($x) { return $x + 1; },
                          function($x) { return $x / 2; });
//echo $fun(3); # should print 5


/*
 * 
Write a function that provides change directory (cd) function for an abstract file system.

Notes:

Root path is '/'.
Path separator is '/'.
Parent directory is addressable as '..'.
Directory names consist only of English alphabet letters (A-Z and a-z).
The function should support both relative and absolute paths.
The function will not be passed any invalid paths.
Do not use built-in path-related functions.
For example:
* 
* 
 * */

class Path
{
    public $currentPath;

    function __construct($path)
    {
        $this->currentPath = $path;
    }

    public function cd($newPath)
    {
		// add new path to currentPath
		$paths = [$this->currentPath , preg_replace('/[^0-9A-Za-z]/', '', $newPath)];
		
		// Change direcoty
		$cd = preg_replace('/[^a-zA-Z\/]/', '', implode('/', $paths));
		 
		
		return $this->currentPath = $cd;
    }
}


$path = new Path('/a/b/c/d');
$path->cd('../x');
//echo $path->currentPath;
/*
$path1 = '/a/b/c/d';
$path2 = '../x';

// Here place anything other then number leter 
$path2 = preg_replace('/[^0-9A-Za-z]/', '', $path2);

$paths = [$path1 , $path2];



preg_replace('/[^a-zA-Z\/]/', '', implode('/', $paths));
* */



class Thesaurus
{
    private $thesaurus;

    function Thesaurus($thesaurus)
    {
        $this->thesaurus = $thesaurus;
    }

    public function getSynonyms($word)
    {
		// Get the word list 
		$wordlist = $this->thesaurus;
		
		// Check if array key exists 
		if(array_key_exists($word, $wordlist)) {
			
			return json_encode(['word' => $word, 'synonyms' => $wordlist[$word]]);
				
		} else {
			
				return json_encode(['word' => 'agelast', 'synonyms' => []]);
			}
		
        
    }
}

$thesaurus = new Thesaurus(
    array 
        (
            "buy" => array("purchase"),
            "big" => array("great", "large")
        )); 

//echo $thesaurus->getSynonyms("bigsdf");
//echo "\n";
//echo $thesaurus->getSynonyms("agelast");





