// Required files modules 
const fs = require("fs");

class Translator {

	constructor(language) {

		// Honds language 
		this.language = 'en';

		// Data in array 
		this.lang = [];

		// Language directory 
		this.directory = 'languages/';


	}

	findString(str) {



	}

	__(str) {


	}
}


var languages = 'ar';

var ob = new Translator(languages);
//console.log(__dirname);
fs.exists('/etc/pass', (exists) => {
  console.log(exists ? 'it\'s there' : 'no passwd!');
});