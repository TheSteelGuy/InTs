<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Angular js MVC</title>
<!--    <script type="text/javascript" src="lib/angular.js"></script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.5/angular.min.js"></script>
    <script type="text/javascript" src="../controllers/DefaultController.js"></script>
    <script type="text/javascript" src="../models/FruitModel.js"></script>
</head>
<body ng-app="angularJsMVCApp">
<div ng-controller="DefaultController">
    <div>
        <label>Enter text for button:</label><input type="text" ng-model="inputValue" />
        <button type="button" ng-click='getFruitsFromModel()'>{{inputValue}}</button>
        <button type="button" ng-click='clearFruits()'>Clear Results</button>
    </div>
    <div ng-show="fruits.length > 0">
        <h3>Fruits:</h3>
        <div ng-repeat="fruit in fruits">
            <span>{{fruit}}</span><br />
        </div>
    </div>
</div>
</body>
</html>