module.exports = {
	
	UAENumber: function (country, number ) {
	
		// If coutnry is AE
		if(country === 'AE') {
			
			// Expression
			var reg = /[^0-9\.]+/g;
			
			// Filter the string 
			var filteredNumber = number.replace(reg, '');
			
			// Get the tree digit first letter 
			var threeDigitFrist = filteredNumber.substring(0, 3);
			
			// Valid UAE mobile prfixs 
			var validMobilePrifix = ['050', '052', '055', '056', '054', '058'];
			
			// Check in array that number prifix existed 
			if(validMobilePrifix.indexOf(threeDigitFrist) !== -1) {
				
					// Return true 
					return true;
			}
		}
		
		return false;
	}

}


