var app = angular.module('shiftDiary', [ 'ngRoute' ]).constant('API_URL',
		'http://localhost/shiftdiary/public/api/v1/');

app.config(function($routeProvider) {
	$routeProvider.when('/', {
		templateUrl : 'pages/main.html',
		controller : 'mainController'
	}).when('/diaries', {
		templateUrl : 'pages/diaries.html',
		controller : 'diariesController'
	}).when('/employees', {
		templateUrl : 'pages/employees.html',
		controller : 'employeesController'
	}).when('/notifications', {
		templateUrl : 'pages/notifications.html',
		controller : 'notificationsController'
	}).when('/texts', {
		templateUrl : 'pages/texts.html',
		controller : 'textsController'
	});;
});

/*
 * //create the controller and inject Angular's $scope
 * app.controller('diariesController', function($scope) { // create a message to
 * display in our view $scope.message = 'Diaries!'; });
 */