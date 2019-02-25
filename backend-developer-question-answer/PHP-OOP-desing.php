<?php



 
 
 class DatabaseReader implements ReaderInterface {
	 
		// Implement read database 
	 }
	 
	 
// Spreadsheet 
class SpreadsheetReader implements ReaderInterface {
	
		// Implement for spreadsheet reader 
	
}


class CSVWriter implements WriterInterface {
	
	// Here Writer interface 
}


class JsonWriter implements WriterInterface {
	
		// Implement in Json writer 
}


class Transformer {
	
	
	public function transform( string $from, string $to ): ararray {
		
		}
}
 
 
 

/*
 * ==========================================
 * Encaptulation 
 * ==========================================
 * */

<?php
 class YourMarks
  {
   private $mark;
   public Marks
  {
   get { return $mark; }
   set { if ($mark > 0) $mark = 10; else $mark = 0; }
  }
  }
?>



/*
 * ==========================================
 * polimorphism 
 * ==========================================
 * */

interface Talkative {
    public function speak();
}

class Dog extends Animal implements Talkative {
    public function speak() {
        return "Woof, woof!";
    }
}

//https://stackoverflow.com/questions/8542661/general-polymorphism-with-php-examples




/*
 * ==========================================
 * Inheritances  
 * ==========================================
 * 
 * Your Employer class extends your User class but when you create your $user and $employer objects they are separate entities and unrelated
 * */


class User{
    public $company_name;

    function PrintCompanyName(){
        echo 'My company name is ' . $this->company_name;
    }
}

class Employer extends User{
    public $fname;
    public $sname;
}

$employer = new Employer();
$employer->company_name = 'Rasta Pasta';
$employer->PrintCompanyName();  //



