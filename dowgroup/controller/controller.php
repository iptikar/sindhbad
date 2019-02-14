<?php 

require 'connection.php';
require 'SelectStoreProcedure.php';


class DowGroup {


	protected $key1 = '3vmigUCQdJGRrvG';

	public $dir = 'public';


	public function __construct() {

		$this->dir = $_SERVER['DOCUMENT_ROOT'].'/dowgroup/public';
	}


	 public function login($username, $password)
	
    {
        
        
        // If post the username and password
        if (isset($_POST[$username]) && isset($_POST[$password])) {
            
            // Then post the element
            $username = $_POST[$username];
            
            // Then post password
            $password = $_POST[$password];
            
            
            if (!filter_var($username, FILTER_VALIDATE_EMAIL)) {

                return "Please enter valid email address.";
            }
            
            
            // Password must not be empty
            if ($password === '') {
                return "Please enter valid password.";
            }
            
            $usertype = $_POST['role'] ?? '';
            
            // Login as must select
            if (!isset($_POST['role'])) {
                return "Please select role.";
            }
                
                
            // table to select
            $table = '';
            
            // Switch the statement
            switch ($usertype) {
                
                case 'admin':
                $table = 'admin_user';
                break;
                
                case 'agent':
                $table = 'users';
                
                // no break
                default:
                break;
                
                
                }
                
                
            // Get database instances 
			$db = Database::getInstance();
            
			// Get the instance of connection
			$mysqli = $db->getConnection();
            
            // Esacep the string
            $username = $mysqli->real_escape_string($username);
            $password = $mysqli->real_escape_string($password);
            
            
            // Sql
            $sql = "SELECT password from $table where email = '$username'";
            
            // Query
            $mysqliquery = $mysqli->query($sql);
            
            // Run the query
            if (!$mysqliquery) {
                
                return $mysqli->error;
            }
            
            
            // Rows must be one
            if ($mysqliquery->num_rows !== 1) {
                return 'Unbale to login, uername and password did not found.';
            }
            
            
            
            $fetch_object = $mysqliquery->fetch_object();
            
            // Get the hased password
            $hassed_password  = $fetch_object->password;
            
            // Match the password by hash password
            
            
            
            if (!password_verify($password, $hassed_password)) {
                
                // Invalid password
                return 'Invalid password.';
            }
            
            // On the basic of usertype we are going to set the sesson
            
            // And redirection the the pages
            // Start the session
            
            
            if ($usertype === 'admin') {
                $_SESSION[$this->key1.'-username'] = $username;
                $_SESSION[$this->key1.'-password'] = $password;
                $_SESSION[$this->key1.'-usertype'] = 'admin';
                
            
                // Clean (erase) the output buffer and turn off output buffering
                ob_end_clean();
                
                // If login type is seller value is 1 then dashboard
                header('Location: http://'.$_SERVER['HTTP_HOST'].'/dowgroup/administrator');
            } elseif ($usertype === 'agent') {
                $_SESSION[$this->key1.'-username-agent'] = $username;
                $_SESSION[$this->key1.'-password-agent'] = $password;
                $_SESSION[$this->key1.'-usertype'] = 'agent';
                $_SESSION[$this->key1.'-time-agent'] = time();
            
                // Clean (erase) the output buffer and turn off output buffering
                ob_end_clean();
                
                // Redirect to the user different interface
                header('Location: http://'.$_SERVER['HTTP_HOST'].'/dowgroup/agent');
            }
        }
    }


      public function LogOut()
    {
        
        // Session is already started in the page
        // Where using this method
        
        // If this method is true
        if ($this->IsUserLoggedInSeller() === true) {
            
                // Unset the all session from this broweser
            unset($_SESSION['3vmigUCQdJGRrvG-username']);
            unset($_SESSION['3vmigUCQdJGRrvG-password']);
            unset($_SESSION['3vmigUCQdJGRrvG-usertype']);
            unset($_SESSION['3vmigUCQdJGRrvG-time']);
                
            // Clean (erase) the output buffer and turn off output buffering
            ob_end_clean();
            // Send the header
            header('Location:http://'.$_SERVER["HTTP_HOST"].'/dowgroup');
        }
    }


     public function IsUserLoggedInSeller()
    {
        if (isset($_SESSION['3vmigUCQdJGRrvG-username']) &&
        isset($_SESSION['3vmigUCQdJGRrvG-password']) &&
        isset($_SESSION['3vmigUCQdJGRrvG-usertype'])
       
    ) {
            return true;
        }
        
        return false;
    }
   
    public function CreateUser($submit) {

    	if(isset($_POST[$submit])) {

    		// Empty password 
    		if($_POST['password'] === '') {

    			return 'Password is requred.';
    		}

    		if($_POST['password'] !== $_POST['confirm-password']) {

    			return 'Both password did not matched';
    		}



    		// Email 
    		if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

    			return 'Invalid email address';

    		}


    		$db = Database::getInstance();

			// Get the instance of connection

			$mysqli = $db->getConnection();

			/*
			SelectRecordsByStoreProcedure(
            mysqli $mysqli,
            string $tablename,
            string $proceurename,
            string $requiredColums,
            string $where,
            string $orderby
            */
            $email = $_POST['email'] ?? '';

            // Select emai 
            $sql = "select id from users where email = '$email' ";

            $result = $mysqli->query($sql);

            // Execute 
            if(!$mysqli->query($sql)) {

            	return $msyqli->error;
            }

            // Chech num rows 
            if($result->num_rows > 0) {

            	return "Email address $email already exists.";
            }



		            


			if(isset($_POST['submit'])) {

				unset($_POST['submit']);

			}

			if(isset($_POST['confirm-password'])) {

				unset($_POST['confirm-password']);
			}

			foreach($_POST as $key => $value) {

				$$key = $value;
			}

			$_POST['created'] = date('Y-m-d');
			$_POST['updated'] = date('Y-m-d');


			// Inser t
			 $query = $mysqli->query("INSERT INTO users(firstname, lastname, phone,email, country, city, password)VALUES('$firstname', '$lastname', '$phone', '$email', '$country', '$city
			 	', '$password')");


			 if(!$query) {

			 	return $mysqli->error;
			 }

			 // Send the notification to the user 
			  $headers = 'From: info@sindhbad.com' . "\r\n" .
            'Reply-To: info@sindhbad.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
            
        	$headers .= "MIME-Version: 1.0\r\n";
        	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

        	// Set the subject
        	$subject = "User has been created.";
        	$message = "Username: $email <br/> Password: $password";
        
        	// Check if mail failed then
        	if (!mail($email, $subject, $message, $headers)) {
        
            	// Return false
            	//return false;
       	 }

       	 return true;


    	}
    }


    public function uploadFiles($filename) {


    	if(isset($_FILES[$filename]['name'])) {


    		$name = $_FILES[$filename]["name"];
            
            /* Get the temporory file name */
            $tmp = $_FILES[$filename]["tmp_name"];

            $type = $_FILES[$filename]["type"];

            $size = $_FILES[$filename]["size"];

            $validsize = 100 * 512000;

             $filetypes = ['image/jpg', 'image/jpeg', 'image/bmp', 'image/png', 'image/gif', 'application/pdf', 'image/vnd.adobe.photoshop', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'];

             // Check if all file set is valid
       	 if (!in_array($type, $filetypes)) {
            
            // Return the message
            return 'Only jpg, jpeg, bmp, png, gif files are supported. Max file size only supported 500 KB.';
       	 }

       	 if($size > $validsize) {

       	 	return 'File size exceeds';

       	 }

		/* Get the random character */
		$randchar = chr(rand(97, 122));

		/* get the random number */
		$number = rand(1, 100000);

		$explodfname = explode('.', $name);

		$newfilename = round(microtime(true)) .$number.'.' . end($explodfname);

		$dir = $this->dir;

		// Insert the filename to the database 

		$db = Database::getInstance();

			// Get the instance of connection

		$mysqli = $db->getConnection();

		$sql = "INSERT INTO files(name, created, updated) VALUES('$newfilename', NOW(), NOW())";

		$result = $mysqli->query($sql);

		if(!$result) {

			return $mysqli->error;
		}


        if(!move_uploaded_file($tmp, "$dir/$newfilename")) {

        	return 'Can not upload the file';
        }
                //$collection->remove();
           
        return true;

    	}
    	


    }


    public function GetUsers() {

    	

    	// Insert the filename to the database 

		$db = Database::getInstance();

			// Get the instance of connection

		$mysqli = $db->getConnection();

		$sql = "select * from users";

		$result = $mysqli->query($sql);

		if(!$result) {

			return $mysqli->error;
		}

		return $result->fetch_all(1);

    }


     public function GetFiles() {

    	

    	// Insert the filename to the database 

		$db = Database::getInstance();

			// Get the instance of connection

		$mysqli = $db->getConnection();

		$sql = "select * from files";

		$result = $mysqli->query($sql);

		if(!$result) {

			return $mysqli->error;
		}

		return $result->fetch_all(1);

    }


    public function assignDoc() {

    	// Need email address and file id to assign 

    	if(!isset($_GET['email'])) {

    		return false;
    	}



    	$email = $_GET['email'];

    	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

                return "Please enter valid email address.";
            }



    	if(!isset($_POST['assign_file'])) return false;
    	// Check assignment 
    	if(count($_POST['assign_file']) < 1) {

    		return 'Please assign the file';
    	}

    	$values  = '';
    	// Multiple value 
    	foreach($_POST['assign_file'] as $key => $value) {

    		$values .= "('".$_GET['email']."','$value', '".date('Y-m-d')."', '".date('Y-m-d')."'),";
    	}


    	$values = rtrim($values, ',');


    	$db = Database::getInstance();

			// Get the instance of connection
    	

		$mysqli = $db->getConnection();

		$sql = "INSERT INTO assignments(email, file_id, updated, created)VALUES 
		$values";

		$result = $mysqli->query($sql);

		if(!$result) {

			return $mysqli->error;
		}

		// Send the notification to the user 
			  $headers = 'From: info@sindhbad.com' . "\r\n" .
            'Reply-To: info@sindhbad.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
            
        	$headers .= "MIME-Version: 1.0\r\n";
        	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

        	// Set the subject
        	$subject = "New Assignment.";
        	$message = "Administrator has made new assigment to you.";


			// Send mail to the user 
			// Check if mail failed then
			if (!mail($email, $subject, $message, $headers)) {

				// Return false
				//return false;
			 }
				return true;
		}




}