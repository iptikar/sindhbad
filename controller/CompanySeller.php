<?php

class CompanySeller 
{
		// Save all document 
		public function SaveCompanyInformation() {
			
			// Check if seller type set 
		if(isset($_POST['business_submit_btn'])) {
			
			$addColumn = [
						'created' => date('Y-m-d'),
						'updated' => date('Y-m-d'),
						'seller_email' => $_SESSION['3vmigUCQdJGRrvG-username'] ?? ''
					];
				
			$removeColumn = ['business_submit_btn', 'full_number'];
		
			$tablename = 'seller_as_company';
			
			return InsertPreparedStatement::SaveDocument($addColumn, $removeColumn, $tablename);
		
			}
	
	
	}
}
