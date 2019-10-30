/**
 * angular.module provides a way to inject your dependencies into the application
 * @type {never}
 */
var helloWorldApp = angular.module('angularJsMVCApp', []);

helloWorldApp.controller('DefaultController', function ($scope, FruitModel) {

    $scope.getFruitsFromModel = function () {
        $scope.fruits = FruitModel.getData();
    };

    $scope.clearFruits = function () {
        $scope.fruits = [];
    }
});