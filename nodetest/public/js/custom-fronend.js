angular.module('product-discription', [])
.controller('myCtrl', ['$scope','$http', function($scope, $http) {
    $scope.count = 0;
    $scope.myFunc = function() {
        //$scope.count++;

        // Declare the variable 
        var mongoID = angular.element('#p_mongo_id').val();
        var price = angular.element('#p_price').val();
        var sku = angular.element('#p_sku').val();
        var name = angular.element('#p_name').val();
        var image_url = angular.element('#p-image-url').val();
        var qty = angular.element('#qty').val();
        
        // CSRF
        var csrf = angular.element('#csrf').val();
        // form a data 
        var datas = {qty : qty,
					mongoID:mongoID,
						price : price,
						sku : sku,
						name : name,
						image_url : image_url
						};
			/*
			 * 
			 * */
		// Url 
		var url = 'http://localhost:8888/addtocart';
					//{'X-CSRF-Token': $('meta[name="_csrf"]').attr('content')}
		// Send ajax request 
		$http({
		headers: {
				'csrf-token' : csrf
				
   } ,
        url: url,
        method: "POST",
        data:datas
        
		})
		.then(function(response) {
            // success
            alert(JSON.stringify(response, null, 2));
    }, 
		function(response) { // optional
            // failed
            alert(JSON.stringify(response, null, 2));
    });
        
        
    };
}]);
