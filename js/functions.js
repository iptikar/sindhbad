	 
	function filterByProperty(array, prop, value) {
	
var batKicks = [];

for (var i = 0; i < array.length ; i++) {
	
	if (array[i][prop] === value) {

batKicks.push(array[i]);
}

}

return batKicks.sort();
}
		
	function HighToLowNumber(json, prop) {
		
		var fun = json.sort(function(obj1, obj2) {
		// Ascending: first age less than the previous
		return obj2[prop] - obj1[prop];
		

	});
	
	return fun;
}
	
	function LowToHighNumber(json, prop) {
		
		var fun = json.sort(function(obj1, obj2) {
		// Ascending: first age less than the previous
		return obj1[prop] - obj2[prop];
		

	});
	
	return fun;
}
	
	
	function GetRecordFromTo(from, to){
		
		return json.splice(from, to);
	}
	
	
	$.getJSON( "static-product/product-cataloges.json", function( json ) {

	//console.log(filterByProperty(json, 'category_id', '314'));
		//console.log(json);
	
		//console.log(LowToHighNumber(json, 'regular_price'));
		
	json.forEach(function(data) {
  
	//console.log(data.images);
  // Get the image s 
	var images = data.images;
	
	// All images 
	var AllJsonImage = JSON.parse(images);
	
	// Parse the json code 
	var parsejson = JSON.parse(images)[0];
	
	// var image link 
	var imgLink = 'http://localhost/img/product-images';
	
	// var img link 
	var PrimaryImage = imgLink +'/'+ parsejson;
	
	
	// append this images to the object with new property 
	
	data.primar_image = PrimaryImage;
	
	// Get rest of image link 
	var GRIL = [];
	
	
	
	
	// Rest of images as well required for product discription page 
	if(AllJsonImage.length > 1) {
			
			// Skip the first image and get rest of image 
			var restOfJsonImg = AllJsonImage.slice(1);
		
			// Just like this 
			//console.log(restOfJsonImg);
			
			restOfJsonImg.forEach(function(restOfImages) {
				
				// Get the images 
				//console.log(restOfImages);
				
				var RestImagesLink = PrimaryImage + '/' + restOfImages;
				
				GRIL.push(RestImagesLink);
			});
			
			
		
		data.restOfImage = GRIL;
			
		}
	
	console.log(data);
	
	//console.log(data);
	// If the image is more the 
	//var 
	//console.log(data);
});
	
	//var b = json.splice(0, 5);
	
	//console.log(b);
	});
	
	
     
     
     
      
		
	function getQueryVariable(variable) {
    var query = window.location.search.substring(1);
    var vars = query.split('&');
    for (var i = 0; i < vars.length; i++) {
        var pair = vars[i].split('=');
        if (decodeURIComponent(pair[0]) == variable) {
            return decodeURIComponent(pair[1]);
        }
    }
    console.log('Query variable %s not found', variable);
}
