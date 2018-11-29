<html lang="en" >
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Angular Material style sheet -->
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/angular_material/1.1.8/angular-material.min.css">
</head>
<body ng-app="BlankApp" ng-cloak>
  <!--
    Your HTML content here
  -->  
  
  <!-- Angular Material requires Angular.js Libraries -->
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-animate.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-aria.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-messages.min.js"></script>

  <!-- Angular Material Library -->
  <script src="https://ajax.googleapis.com/ajax/libs/angular_material/1.1.8/angular-material.min.js"></script>
  
  <!-- Your application bootstrap  -->
  <script type="text/javascript">    
    /**
     * You must include the dependency on 'ngMaterial' 
     */
    angular.module('BlankApp', ['ngMaterial', 'ngMessages']);
    
    angular.module('switchDemo1', ['ngMaterial'])
.controller('SwitchDemoCtrl', function($scope) {
  $scope.data = {
    cb1: true,
    cb4: true,
    cb5: false
  };

  $scope.message = 'false';

  $scope.onChange = function(cbState) {
    $scope.message = cbState;
  };
});


  </script>
  
  <?php
  
  print_R($_POST);
  ?>
  
<div layout="row">
  <div flex>First item in row</div>
  <div flex>Second item in row</div>
</div>
<div layout="column">
  <div flex>First item in column</div>
  <div flex>Second item in column</div>
</div>
<div>
	
<form action = "<?=  $_SERVER['PHP_SELF']?>" method = "post">

<input type = "text" name = "yala"/>
 <md-checkbox ng-model="data.cb2" aria-label="Checkbox 2" ng-true-value="'yup'" ng-false-value="'nope'" name = "check">
  Default Border
 </md-checkbox>


 <md-checkbox ng-model="data.cb2" aria-label="Checkbox 2" ng-true-value="'yup'" class="dotted" ng-false-value="'nope'" name = "bin">
    Custom Border
 </md-checkbox>
 
 <button type = "submit">Submit</button>

</form>


</body>
</html>

<!--
Copyright 2016-2018 Google Inc. All Rights Reserved. 
Use of this source code is governed by an MIT-style license that can be found in the LICENSE file at https://material.angularjs.org/latest/license.
-->
