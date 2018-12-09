<?php

class Node 
{
	
		private $_i;
		
		public function __construct($key) 
		{
				
			$this->_i = $key;
		}
		
		public function getKey() {
			
			return $this->_i;
		}
}


class Heap {
	
		private $head_Array;
		
		private $_current_Size;
		
		public function __construct() {
			
			
			$head_Array = array();
			
			$this->_current_Size = 0;
		}
		
		public function remove() {
			
			$root = $this->head_Array[0];
		}
	
	}
