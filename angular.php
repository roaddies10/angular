<!DOCTYPE html>
<html lang="en-US">
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<body>

<div ng-app="myApp" ng-controller="myCtrl">

First Name: <input type="number" ng-model="firstName"><br>
Last Name: <input type="number" ng-model="lastName"><br>
<br>
Full Name: {{firstName + lastName}}

</div>


<script>
var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope) {
    $scope.firstName= 5;
    $scope.lastName= 2;
});

</script>

</body>
</html>