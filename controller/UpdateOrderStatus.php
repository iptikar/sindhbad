<?php 

// Sending order notification to the client 

// While updating database as well 

// Adding Record to the database as well 

class UpdateOrderStatus
{

		/* Email template */
		public $emailTemplate;
		
		/* Subject */
		public $subject;
		
		/* Notify customer */
		public $notify_buyer = false;
		
		
		/* Comments */
		public $comments;
		
		
		/* Submit */
		public $submit;
		
		/* Status */
		public $status;
		
		/* Buyer email */
		
		public $buyer_email;
		
		/* Order id */
		public $order_id;
		
		
		public function __construct( string $submit, 
									string $status,
									string $notify_buyer, 
									string $comments
									
									) {
			
			$this->submit =  $submit;  
			$this->notify_buyer = $notify_buyer; 
			$this->comments = $comments;
			$this->status = $status;
			
			
		}
		
		public function UpdateOrder() {
			
			
			// Check if data post 
			if(isset ($_POST[$this->submit])) {
				
				/*
				 * [comments] => 
					[notify_buyer] => 1
					[test] => 1
					[submit] => 
				 * */
					
					/* We will send email to buyer */
					
					
					// Save the document 
					$order_id = $_GET['order_id'];
					
					$this->order_id  = $order_id;
					
					
					// Get the data 
					$comments = $_POST[$this->comments] ?? '';
					
					// status 
					$status = $_POST[ $this->status ] ?? '';
					
					// update order table 
			
					 // Get the connection
					$db = Database::getInstance();
								
					// Get the instance of connection
								
					$mysqli = $db->getConnection();
					
					$sql = "UPDATE orders SET status = ? WHERE order_id = ?";
					
					// $stmt 
					$updateStmt = $mysqli->prepare($sql);
					
					// Check if fails 
					if(!$updateStmt) {
							
							return $mysqli->error;
					}
        
					// Bind 
					$updateStmt->bind_param("ss", $status, $order_id);
					
					// Execute 
					if(!$updateStmt->execute()) {
						
						return $updateStmt->error;
					}
					
					/* How if order status is already exits in orderstatus table */
					/* Then update rather then inserting */
					$tablename = 'orderstatus';
									
					// Procedure name
					$proceurename = 'IfOrderStatusExists';
								
					$requiredColums = 'id';
					
					$lowerStatus = strtolower($status);
					
					// Where clause
					$where = "WHERE LOWER(status) = '$lowerStatus'";
					
					$orderby = '';
					
					/* Check is status is already tehre */
					$sql = "SELECT id from orderstatus WHERE LOWER(status) = ?";
					
					// Prepae 
					$stmtCheckStat = $mysqli->prepare($sql);
					
					// Check iff 
					if(!$stmtCheckStat){
						
							return $stmtCheckStat->error;
					}
					
					// bind data 
					
					$stmtCheckStat->bind_param("s", $lowerStatus);
					
					// Execute 
					if( !$stmtCheckStat->execute()) {
						
							return $stmtCheckStat->error;
						}
						
					// Get the check 
					/* store result */
					$stmtCheckStat->store_result();
					
					
					
					$data = [];
					
					if($stmtCheckStat->num_rows === 1) {
						
							$s = "ss";
							
							// Data to bind 
							$data = [$comments, $lowerStatus];
							
							// Run another command 
							$sql = "UPDATE orderstatus SET updated_at = NOW(), comments = ? WHERE status = ?";
							
					} else {
						
						$s = "sss";
						
						$data = [$status, $order_id, $comments];
						
						$sql = "INSERT INTO orderstatus (status, order_id, comments, created_at, updated_at) values (?, ?, ?, NOW(), NOW())";
        
					}
					
					
					
					
					// Prepare 
					$stmt = $mysqli->prepare($sql);
					
					// Check if result fails 
					if(!$stmt) {
						
						return $mysqli->error.$mysqli->errno;
					}
					
					// Bind 
					$stmt->bind_param($s, ...$data);
					
					// Execute 
					if(!$stmt->execute()) {
						
						// Return 
						return $stmt->error;
					}

					// Stmt close 
					$updateStmt->close();
					$stmt->close();
					$stmtCheckStat->close();
					
					// Notify to user is poted 
					if(isset ($_POST[$this->notify_buyer])) {
						
						// Run another method 
						$tablename = 'orders';
									
						// Procedure name
						$proceurename = 'GetBuyerEmail';
									
						$requiredColums = 'buyer_email';
									
						// Where clause
						$where = "WHERE order_id = '$order_id'";
						
						$orderby = '';
						
						// Get the buyer email
									
						$buyer_email =  SelectStoreProcedure::SelectRecordsByStoreProcedure($mysqli, $tablename, $proceurename, $requiredColums, $where, $orderby)['result'][0][0]['buyer_email'];
						
						$this->buyer_email = $buyer_email;
						
						// Send notification 
						$this->SendNotification();

					}
					
				return true;
			}
		
	}
		
		
		// Send notification 
		public function SendNotification() {
			
				$order_id = $this->order_id;
				
				$buyer_email = $this->buyer_email;

				// Form vairable for sending notification 
				/*
				* Variable to send status, orderid
				* */
				$status = $this->status;

				$url = 'http://localhost/templates/order-notification.phtml';

				// Data 
				$data = ['order_id' => $order_id, 'status' => $status];

				// Subject 
				$subject = "Sindhbad.com, Update of your order.";
				
				/*
				 * array $data, 
								string $url,
								string $to, 
								string $subject
				 * 	*/
				
				$notification = new GetEmailTemplate($data, $url, $buyer_email, $subject);
				
				// Send notification 
				$notification->SendEmailWithTemplate();
				
				return true;
			
		}
		
		
		// What is status of order 
		public function WhatIsStausOfOrder(string $order_id): array {
			
				// Get the order id 
				if(isset( $_GET [$order_id ]) ) {
					
						// Get the order id 
						$order_id = $_GET [$order_id ];
						
						// Get the connection
						$db = Database::getInstance();
								
						// Get the instance of connection
								
						$mysqli = $db->getConnection();
						
						$sql = "SELECT orders.status,orderstatus.comments  from orders 
						INNER JOIN orderstatus ON orderstatus.status = orders.status 
						WHERE orders.order_id = ?";
						
						// Bind the param 
						$stmt = $mysqli->prepare($sql);
						
						// 
						if(!$stmt){
							
							return $mysqli->error;
						}
						
						// Bind 
						$stmt->bind_param("s", $order_id);
						
						// Exe
						if(!$stmt->execute()) {
							
								return $stmt->error;
						}
						
						// Get resut 
						$result = $stmt->get_result();
						
						
						
						$return['result'] =  $result->fetch_assoc() ?? NULL; 
						
						$result->free_result();
						
						$stmt->close();						 
						
						return $return;
						
						
				}
		}
}
