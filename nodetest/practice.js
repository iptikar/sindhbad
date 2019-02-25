function printString(string) {
	
	// Return new promises
	return new Promise((resolve, reject) {
		
		// Set timeout 
		setTimeout(() => {
			
			console.log(string);
			resolve();
			},
			Math.floor(Math.random() * 100) + 1)
		})
	}
	
	
function printAll() {
	
		printString("A").then((){ return printString ("B")
			
		}).then((){
			
			return printString("C")
			})
	}

printAll();

async function getData() {
	
		// Try the function 
		try {
			
				let [var1, var2] = await Promise.all([a(), b()])
				
				console.log(`All done with ${var1} ${var2}`)
			
			} catch ( err ) {
					
					console.log(err);
				}
	}
	
getData();



// another way 
Promise.resolve(["Hello", "World", "!"]).then(([a, b, c]) {
	
		console.log(a+b+c);
	})
	
// Async function 
async function addAll() {
	
		let toPrint = '';
		
		toPrint = await addString(toPrint, 'A')
	}
	
function readJSON(filename) {
	
		// Return new promises 
		return new Promise(function (fullfill, reject) {
			
				readFile(filename, 'utf8').done(function (res) {
					
					
						try {
								fullfill(JSON.parse(res));
							} catch  (ex) {
								
								reject(ex)
								}
					}, reject)
			})
	}
	
