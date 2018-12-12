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
  
  <style>
  .flex {
      -webkit-flex: 1 1 0%;
          -ms-flex: 1 1 0%;
              flex: 1 1 0%;
      box-sizing: border-box;
    }
    .flex-20 {
      -webkit-flex: 1 1 20%;
          -ms-flex: 1 1 20%;
              flex: 1 1 20%;
      max-width: 20%;
      max-height: 100%;
      box-sizing: border-box;
    }

    .layout-row .flex-33 {
      -webkit-flex: 1 1 calc(100% / 3);
          -ms-flex: 1 1 calc(100% / 3);
              flex: 1 1 calc(100% / 3);
      box-sizing: border-box;
    }

    .layout-row  .flex-66 {
      -webkit-flex: 1 1 calc(200% / 3);
          -ms-flex: 1 1 calc(200% / 3);
              flex: 1 1 calc(200% / 3);
      box-sizing: border-box;
    }

    .layout-row .flex-33 {
      max-width: calc(100% / 3);
      max-height: 100%;
    }

    .layout-row  .flex-66 {
      max-width: calc(200% / 3);
      max-height: 100%;
    }

    .layout-column .flex-33 {
      max-width: 100%;
      max-height: calc(100% / 3);
    }

    .layout-column  .flex-66 {
      max-width: 100%;
      max-height: calc(200% / 3);
    }
  </style>
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


<div layout="column" class="zero">

  <div flex="33" flex-md="{{ vm.box1Width }}" class="one">sdfsdf</div>
  <div flex="33" layout="{{ vm.direction }}" layout-md="row" class="two">

    <div flex="20" flex-md="10" hide-lg class="two_one">sdfasdf</div>
    <div flex="30px" show hide-md="{{ vm.hideBox }}" flex-md="25" class="two_two">asdfasdf</div>
    <div flex="20" flex-md="65" class="two_three">asdfadf</div>

  </div>
  <div flex class="three">sdfsdf</div>

</div>

<div layout="row">
  <div flex>First item in row</div>
  <div flex>Second item in row</div>
</div>
<div layout="column">
  <div flex>First item in column</div>
  <div flex>Second item in column</div>
</div>


<demo-include files="demoCtrl.files" module="demoCtrl.demoModule" class="">
      <div class="demo-content ">
    <div layout="row" class="ng-scope layout-row">
      <div flex="" class="flex">First item in row</div>
      <div flex="" class="flex">Second item in row</div>
    </div>
    <div layout="column" class="ng-scope layout-column">
      <div flex="" class="flex">First item in column</div>
      <div flex="" class="flex">Second item in column</div>
    </div>
    </div></demo-include>


</body>
</html>

<!--
Copyright 2016-2018 Google Inc. All Rights Reserved. 
Use of this source code is governed by an MIT-style license that can be found in the LICENSE file at https://material.angularjs.org/latest/license.
-->
