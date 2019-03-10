<?php 

require 'connection.php';
require 'SelectStoreProcedure.php';


class DowGroup {

    // Session key 
	protected $key1 = '3vmigUCQdJGRrvG';

    // Director 
	public $dir = 'public';


    // Adding something in the object 
	public function __construct() {

		$this->dir = $_SERVER['DOCUMENT_ROOT'].'/dowgroup/public';
	}


    // Method login paramaters username , password 
	 public function login($username, $password)  {
        
        
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
                
            
                // Clean (erase) the output buffer and turn off output buffering
                ob_end_clean();
                
                // Redirect to the user different interface
                header('Location: http://'.$_SERVER['HTTP_HOST'].'/dowgroup/agent');

                //ob_end_clean();
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
            unset($_SESSION['3vmigUCQdJGRrvG-username-agent']);
            unset($_SESSION['3vmigUCQdJGRrvG-password-agent']);
           
                
            // Clean (erase) the output buffer and turn off output buffering
            ob_end_clean();
            // Send the header
            header('Location:http://'.$_SERVER["HTTP_HOST"].'/dowgroup');
        }
    }


    public function LogOutAgent()
    {
        
        // Session is already started in the page
        // Where using this method
        
        // If this method is true
        
            
                // Unset the all session from this broweser
            unset($_SESSION['3vmigUCQdJGRrvG-username-agent']);
            unset($_SESSION['3vmigUCQdJGRrvG-password-agent']);
            
                
            // Clean (erase) the output buffer and turn off output buffering
            ob_end_clean();
            // Send the header
            header('Location:http://'.$_SERVER["HTTP_HOST"].'/dowgroup');
        
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



            $password = password_hash($password , PASSWORD_DEFAULT);
			// Inser t
			 $query = $mysqli->query("INSERT INTO users(firstname, lastname, phone,email, country, city, password, created, updated)VALUES('$firstname', '$lastname', '$phone', '$email', '$country', '$city
			 	', '$password', NOW(), NOW())");


			 if(!$query) {

			 	return $mysqli->error;
			 }

			 // Send the notification to the user 
			  $headers = 'From: info@dowgroup.com' . "\r\n" .
            'Reply-To: info@dowgroup.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
            
        	$headers .= "MIME-Version: 1.0\r\n";
        	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

        	// Set the subject
        	$subject = "User has been created.";
        	

             // Get template 
            $url = $_SERVER['HTTP_HOST'].'/dowgroup/template/createUser.phtml';

            $content = $this->GetEmailTemplate($url, $_POST);

            $message = $content;
        
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

        // Post discription 
      
        $about = $_POST['about'] ?? '';


		$sql = "INSERT INTO files(name, about, created, updated) VALUES('$newfilename', '$about', NOW(), NOW())";

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

    public function FinalUploadFiles($filename)
    {

        // Post category 
        $expcat = explode('#parent#', $_POST['category']);

        // Remove 0 if there is 

        $category_id = $expcat[0];

         if (($key = array_search(0, $expcat)) !== false) {
                
                    
                    unset($expcat[$key]);
            }

        sort($expcat);


        // Implode the directory 
        $impdir = implode('/', $expcat);



        /*
        echo "<pre>";

        print_R($expcat);

        echo "</pre>";
        return false;

        */

        
        if(!isset($_POST['category'] ) || $_POST['category'] === '') {

            return 'Please add category first.';
        }


        /* Get the each file access */
        $imgnames  = array();
        
        foreach ($_FILES[$filename]["name"] as $key => $value) {
            /* get the name  of file*/
            $name = $_FILES[$filename]["name"][$key];
            
            /* Get the temporory file name */
            $tmp = $_FILES[$filename]["tmp_name"][$key];


            $size = $_FILES[$filename]["size"][$key];

            $validsize = 100 * 512000;

            if($size > $validsize) {

                return 'Can not upload the file, size limit exceeds.';
            }
            
            /* Get the random character */
            $randchar = chr(rand(97, 122));
            
            /* get the random number */
            $number = rand(1, 100000);
            
            $explodfname = explode('.', $name);
            
            $newfilename = round(microtime(true)) .$number.'.' . end($explodfname);
            
            
            $imgnames[] = $newfilename;
            
            // Post discription 
            $discription = $_POST['discription'] ?? '';
            $category = $_POST['category'] ?? '';

            if($category !== '') {

                $directory = $this->dir.'/'.$impdir;
            } else {

                $directory = $this->dir;

            }
            

            foreach ($imgnames as $key=> $value) {
                
                move_uploaded_file($tmp, "$directory/$newfilename");
                //$collection->remove();
            }

            // Save to the database these files 

            $values  = '';

        // Multiple value 
        // Create link


        }
        
        $db = Database::getInstance();

            // Get the instance of connection

        $mysqli = $db->getConnection();
        

        
        $names = json_encode($imgnames);
        $about = $_POST['about'] ?? '';
        $about = $mysqli->real_escape_string($about);
        $title = $_POST['title'] ?? '';

        
        // Select if id exits 
        $sql = "select name, title from files where cagtegory_id = '$category_id'";

        // Run the query 
        $result = $mysqli->query($sql);

        if(!$result) {

            return $mysqli->error;
        }

        if($result->num_rows > 0) {

            // Get name 
            $titletotarray = '';
            $filenames = '';

            while($row = $result->fetch_assoc()) {

                $titletotarray = $row['title'];
                $filenames = $row['name'];
            
            }

            // Get title to array 
            $titltotarray = json_decode($titletotarray , true);
            $filenames = json_decode($filenames, true);


            $newFiles = json_encode (array_merge($filenames, $imgnames));

            $newtitle = json_encode (array_merge($titltotarray, $_POST['title']));

            $newFiles = $mysqli->real_escape_string($newFiles);
            $newtitle = $mysqli->real_escape_string($newtitle);

            $sql = "UPDATE files SET name = '$newFiles', title = '$newtitle' WHERE cagtegory_id = '$category_id'";

            $result = $mysqli->query($sql);

            if(!$result) {

                return $mysqli->error;
            }

        } else {

            $title  = $_POST['title'] ?? '';

            $title = json_encode($title);

            // Save the file with category id, discription and filename in json 
            $sql = "INSERT INTO files(cagtegory_id, name, title, about, created, updated)VALUES('$category_id', '$names', '$title','$about', NOW(), NOW())";

            $result = $mysqli->query($sql);

            if(!$result) {

                return $mysqli->error;
            }

        }
        

        return true;
    }


    public function uploadFileAndSave($filename) {


         $filelink = '';
         $files = $this->FinalUploadFiles($filename);

         if(json_decode($files) == true) {


            foreach($files as $key => $value) {


            }
         }
         /*
        foreach($imgnames  as $key => $value) {

            $values .= "('".$_GET['email']."','$value', '".date('Y-m-d')."', '".date('Y-m-d')."'),";

            $link = $this->dir.'/'.$value;
           
           $filelink .= "<a href = '$link' download>Download</a>";
        }
        */

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

		$sql = "select files.name as files, files.title as title, files.id, files.cagtegory_id, file_categories.name from files INNER JOIN file_categories ON files.cagtegory_id = file_categories.id";

		$result = $mysqli->query($sql);

		if(!$result) {

			return $mysqli->error;
		}

		return $result->fetch_all(1);

    }


    public function assignDoc() {


if(!isset($_POST['assign-files'])) {

    return false;
}

//files , users [] posted 

if(!isset($_POST['users']) && !isset($_POST['files'])) {

    return false;
}


if(count($_POST['users']) < 1) {

    return false;
}

if(count($_POST['files']) < 1) {

    return false;
}



    	$values  = '';

    	// Multiple value 
    	// Create link

        $filelink = '';

        /*

        foreach($_POST['assign_file'] as $key => $value) {

    		$values .= "('".$_GET['email']."','$value', '".date('Y-m-d')."', '".date('Y-m-d')."'),";

            $link = $this->dir.'/'.$value;
    	   
           $filelink .= "<a href = '$link' download>Download</a>";
        }

        */


        echo $filelink;

    	$values = rtrim($values, ',');


    	$db = Database::getInstance();

			// Get the instance of connection
    	

		$mysqli = $db->getConnection();

        $users = $_POST['users'] ?? '';
        $files = $_POST['files'] ?? '';


        
        return ;

        $fileAnchor  = '';

        foreach($files as $key => $value) {

            $fileAnchor .= "<a href = '$value'></a> <br/>";
        }
        // Get file in anchor tag 
        

        $files = json_encode($files);

        foreach($users as $key => $value) {

        $sql = "INSERT INTO assignments(email,comments, updated, created)VALUES('$value', '$files', NOW(), NOW())";

        $result = $mysqli->query($sql);

        if(!$result) {

            return $mysqli->error;
        }


        // Send the notification to the user 
        $headers = 'From: info@dowgroup.com' . "\r\n" .
        'Reply-To: info@dowgroup.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

        // Get template 
        $url = $_SERVER['HTTP_HOST'].'/dowgroup/template/assignment.phtml';

        $content = $this->GetEmailTemplate($url, $_POST);


        // Set the subject
        $subject = "Administrator has made new assigment to you.";
        $message = $content;

        // Send mail to the user 
        // Check if mail failed then
        if (!mail($value, $subject, $message, $headers)) {

        // Return false
        //return false;
        }               
    }

        return true;
	}


        public function changePassword() {

            if(isset($_POST['submit'])) {

                 // check session 
            if(isset($_SESSION['3vmigUCQdJGRrvG-username-agent'])) {

                // Get username 
                $email = $_SESSION['3vmigUCQdJGRrvG-username-agent'];

                $password = $_POST['password'] ?? '';
                $confirm_password = $_POST['confirm-password'] ?? '';

                if($password === '') {

                    return 'Please enter the password';
                }

                if($password !== $confirm_password) {

                    return 'Both password did not matched';
                }

                if($this->checkPassword($password) !== true ) {

                    return $this->checkPassword($password);
                }

                $password = password_hash($password, PASSWORD_DEFAULT);


                $db = Database::getInstance();

                 // Get the instance of connection
    

                $mysqli = $db->getConnection();

                $sql = "UPDATE users SET password = '$password' WHERE email = '$email'";

                // Ru
                $result = $mysqli->query($sql);

                if(!$result) {

                    return $mysqli->error;
                }

                if($mysqli->affected_rows === 1) {
                    
                    ob_end_clean();

                    header('Location: http://'.$_SERVER['HTTP_HOST'].'/dowgroup/?password_changed=1');

                 

                }
             }
        }


           

        }


        public function getAssignment() {

            // Get username 
            $email = $_SESSION['3vmigUCQdJGRrvG-username-agent'];

            $db = Database::getInstance();

             

            $mysqli = $db->getConnection();

            $sql = "SELECT * from assignments  WHERE email = '$email' order by created desc";

            $result = $mysqli->query($sql);

            if(!$result) {

                return $mysqli->error;
            }

            return $result->fetch_all(1);



        }


        public function sendMesasge() {


            if(isset($_POST['submit'])) {

                // Post messag
                $subject = $_POST['subject'] ?? '';
                $message = $_POST['message'] ?? '';

                if($subject == '') {

                    return false;
                }

                if($message == '') {

                    return false;
                }


              $db = Database::getInstance();

             

            $mysqli = $db->getConnection();
            $subject = $mysqli->real_escape_string($subject);

            $message = $mysqli->real_escape_string($message);

            $email = $_SESSION['3vmigUCQdJGRrvG-username-agent'];

            $sql = "INSERT INTO message (subject, message, email, created, updated) VALUES ('$subject' , '$message', '$email', NOW(), NOW())";

            $result = $mysqli->query($sql);

            if(!$result) {

                return $msyqli->error;
            }

            return true;




            }
        }


        public function getMessage() {

            $db = Database::getInstance();

            $mysqli = $db->getConnection();

            $sql = "select * from message";

            $result = $mysqli->query($sql);

            if(!$result) {

                return $mysqli->error;
            }

            if($result->num_rows > 0) {


                return $result->fetch_all(1);
            }

            return [];

            
        }

        public function addFileCategory() {

            $db = Database::getInstance();

            $mysqli = $db->getConnection();

            if(isset($_POST['add-category'])) {

                    // Get the category name 
                $name = $_POST['category-name'] ?? '';

                if($name === '') { 

                    // Return false 
                    return false;
                }

                // Only numbers and letter 
                $reg = '/^[0-9A-Za-z_ ]{1,50}$/';

                if(!preg_match($reg, $name)) {

                    return false;
                }

                // Parent 
                $parent = $_POST['parent'] ?? '';

                // Here i will show you 

                $explodeParent = explode('#parent#',$parent);

                // Id of current parent 
                $parent = $explodeParent[0];

                // Rest is directory 

                // Get rest of directory 

                

                if (($key = array_search(0, $explodeParent)) !== false) {
                
                    unset($explodeParent[$key]);
                }

                sort($explodeParent);

               // echo "<pre>";
               // print_R($explodeParent);
               // echo "</pre>";

                // Implode 
                $getDir = implode('/', $explodeParent);

                //echo  $getDir;
                //return false;

                // Save to database 
                $name = $mysqli->real_escape_string($name);

                if($parent == '') {

                    $parent = 0;

                }

                


                // Insert 
                $sql = "INSERT INTO file_categories(name, parent, created, updated)VALUES('$name', '$parent', NOW(), NOW())";

                // Result 
                $result = $mysqli->query($sql);

                // Create directory with id 
                $id = $mysqli->insert_id;


                // Check if directory exists 
                $dir = $this->dir.'/'.$getDir.'/'.$id;

                if(!is_dir($dir)) {

                    mkdir($dir, 0777);
                }

                // Run the query 
                if(!$result) {

                    // return error 
                    return $mysqli->error;

                }

                return true;



            }
        }

        public function getCategory():array {

            $db = Database::getInstance();

            $mysqli = $db->getConnection();

            $sql = "SELECT id, name FROM file_categories";

            $result = $mysqli->query($sql);

            if(!$result) {

                return $mysqli->error;
            }

            return $result->fetch_all(1);
        }

        // Get template Email 
        public function GetEmailTemplate($url, $postfields) {

                    // Curl init
                $ch = curl_init();
                
                // Setting url to request
                curl_setopt($ch, CURLOPT_URL, $url);
                
                // Enable post request
                curl_setopt($ch, CURLOPT_POST, 1);

                $fields_string = http_build_query($postfields);
                
                // Post the fields
                curl_setopt(
                    $ch,
                    CURLOPT_POSTFIELDS,
                    $fields_string
                );
                
                // Enable return transfer
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                
                // Ouput the data
                $server_output = curl_exec($ch);

                // Curl close the connection
                curl_close($ch);
               
                return $server_output;
    }


    public function checkPassword($pwd) {
    
        

        // Eight char 
        if (strlen($pwd) < 8) {
            
            return "Password too short!";
        }

        // Letter and number 
        if (!preg_match("#[0-9]+#", $pwd)) {
            return "Password must include at least one number!";
        }

        // String 
        if (!preg_match("#[a-zA-Z]+#", $pwd)) {
            return "Password must include at least one letter!";
        }     

        return true;
        
        }

        // Get all category
        public function GetAllCategories() {


            // Sql 
            $db = Database::getInstance();

            $mysqli = $db->getConnection();

            // Sql 
            $sql = "SELECT * FROM file_categories";

            // Result 
            $result = $mysqli->query($sql);

            // IF failed 
            if(!$result) {

                return $mysqli->error;
            }

            return $result->fetch_all(1);
        }

        public function GetCategories() {

            $nodeList = array();
            $tree     = array();

             // Sql 
            $db = Database::getInstance();

            $mysqli = $db->getConnection();


            $result = $mysqli->query("SELECT id, name, parent FROM file_categories ORDER BY parent");
            
            while($row = $result->fetch_assoc()){
            
                $nodeList[$row['id']] = array_merge($row, array('children' => array()));
            
            }


            $result->free_result();


            foreach ($nodeList as $nodeId => &$node) {

            if (!$node['parent'] || !array_key_exists($node['parent'], $nodeList)) {
                $tree[] = &$node;

            } else {

                $nodeList[$node['parent']]['children'][] = &$node;
            }
            }
            unset($node);
            unset($nodeList);
       
            return $tree;

        }

        public function GetTreeCategory($array, $nbsp, $parents) {



            $option = '';

            // Append parent 
            

            

            // Count 
            foreach($array as $key => $value) {

                $option .= '<option value="'.$value['id'].$parents.'#parent#'.$value['parent'].'">'.$nbsp.$value['name'].'</option>';

                if(count($value['children']) > 0) {

                     $option .= $this->GetTreeCategory($value['children'], "$nbsp&nbsp;&nbsp;&nbsp;", '#parent#'.$value['parent']);
                }
            }

            return $option;

        }

        public function ScanDirectory() {


            $dir    = '../public';
            $scanned_directory = array_diff(scandir($dir), array('..', '.'));

            
            return $scanned_directory;
    }
}