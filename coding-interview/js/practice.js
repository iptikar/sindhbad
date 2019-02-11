function arr_diff(a1, a2) {

	var a = [], diff = [];

	for( var i = 0; i < a1.length; i++){

		a[a1[i]] = true;
	}


	for( var i = 0; i < a2.length; i++) {

		if(a[a2[i]]) {

			delete a[a2[i]];
		} else {

			a[a2[i]] = true;
		}
	}

	for(var k in a) {

		diff.push(k);
	}

	return diff;
}


// Subtract array from array 
Array.prototype.subtract = function (array ) {

	array = array.slice();

	return this.filter( function (e) {

		var p = array.indexOf(e);

		if(p === -1) {

			return true;
		}

		array.splice(p, 1);
	})
}


var a = [1, 2, 2, 3, 3, 3],
    b = [1, 2, 3];

console.log(a.subtract(b));

