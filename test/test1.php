<?PHP
//echo password_hash("thisismylife", PASSWORD_DEFAULT);
//echo base64_decode('YWthc2hjaGU3MkBnbWFpbC5jb20=');

//echo base64_decode('YmhhcmF0cm9zZTFAZ21haWwuY29t');

//echo "<pre>";

//print_R($_COOKIE);
//echo "</pre>";

// Factory 

class FriendFactory implements FriendFactoryInterface
{
		public function create() :Friend {
			
				$friend = new Friend();
				
				// Return friend 
				return $friend;
			}
	}
	
	
// Starategy 

interface ReadInterfaces {
	
		public function start():void;
		public function read():array;
		public function stop(): void;
		
	}

interface WriteInterface {
	
		public function start():void;
		public function write( array $data):void;
		
		public function stop(): void;
	
	}



class DatabaseReader implements ReadInterfaces [

}

class SpreadsheetReader implements ReaderInterface {
	
}

class CsvWrite implements WriteInterface {
		
	
}

class JsonWriter implements WriteInterface {
	
	
}

class Transform {
	
		public function transform ( string $from,
		string $to) : void {
			
			
				$reader = $this->findReader($from);
				$writer = $this->findWriter($too);
				
				$reader->start();
				$writer->start();
				
				
			}
	}
	
	
// Adaptor 
class Storage {
	
		private $source;
		
		public function __construct(AdapterInterface $source) {
			
				$this>source = $source
			}
			
		public function getOne(int $id):? object {
			
			
			return $this->source->find($id)
		}
		
		function function getAll(array $criterial = []):Collection {
			
			return $this->source->findAll($criteria);
		}
}


interface AdapterInterface {
	
		public function find(int $id) : ? object;
		public function findAll( array $criteria) : ? object;
	
	}
	
	
	
class MysqlAdapter implements AdapterInterface {
	
	
		public function find (int $id ) : ? object {
			
				$data = $this->mysql->fetchRow(['id' => $id])
			}
	}
