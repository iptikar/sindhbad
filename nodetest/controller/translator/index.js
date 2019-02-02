// Required files modules 
// Method is simple 
/*
	Get the data from the file and then explode it and pass it to the view 
	After passing to the view then only from ther you can using javascript 
	frontend function to find your string is exists if exists then simply 
	return the string 
*/
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

		fs.exists(this.directory + this.lang +'.txt', (exists) => {
 			 
 			 // If exists then process 
 			 if(exists) {


 			 }
		});



	}
}


var languages = 'ar';

var ob = new Translator(languages);
//console.log(__dirname);

//console.log(ob.__('Repeat email'));

function readLines(input, callback) {
  var remaining = '';

  var collection = [];

  input.on('data', function(data) {
    remaining += data;
    var index = remaining.indexOf('\n');
    while (index > -1) {
      var line = remaining.substring(0, index);
      remaining = remaining.substring(index + 1);
      index = remaining.indexOf('\n');
      collection.push(line);
    }
  });

  input.on('end', function() {
    if (remaining.length > 0) {
     
     collection.push(remaining);

  		//console.log(remaining);
    }

    return callback(collection);
  });



}




var input = fs.createReadStream('languages/ar.txt');
var str = 'Email Server';

function findString(input, str, callback) {

	readLines(input, function(data){


		// All content 
		var translatedArray = [];

		// Iritate each data 
		for(var i in data ) {

			// Explode with = 
			let SplitStr = data[i].split('=');

			// append 
			var allContents = [];

			for(var j in SplitStr) {

				allContents[j] = SplitStr[j];
			}

			translatedArray[i] = allContents;

		}


		
		return callback(null, translatedArray);
	
});


}



findString(input, str, function(err, data) {

	// var 
	translated = '';

	if( typeof data == 'object' && data.length > 0) {

		for(var i in data) {

			if(data[i][0] === str) {

				translated = data[i][1];
				break;
			}
		}
	}

	
	var returnString = translated == '' ? str : translated;

	console.log(returnString);
	
})


findString(input, str, function (err, data){

	
})
/*

function TranslerS(callback) {

fs.readFile('languages/ar.txt', function(err, data) {
    if(err) throw err;

    // Get data in string 
    var content = [];

    var array = data.toString().split("\n");
    for(i in array) {
        
        content.push(array[i]);
    }

   return callback(null,content);

});

}


TranslerS(function (err, data) {

	console.log(data);
})
*/


