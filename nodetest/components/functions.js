// Add you all extra function here 

var misFunction =  {
		
	SumArrayColumn:function (arr, index) {

  	// Map the array first 
	var prices = arr.map(x => parseInt(x[index] ) ? parseInt(x[index] ) : 0);
	
  	// Return sum of array 
	var sum = prices.reduce((a, b) => a + b, 0);
  
  	// Return sum 
  	return sum;
}
		
}


module.exports = misFunction;
