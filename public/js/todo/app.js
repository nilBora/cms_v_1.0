var todoApp = angular.module('todoApp', [
  'ngRoute',
  'todoControllers'
]);

todoApp.config(['$routeProvider',
  function($routeProvider) {

    $routeProvider.
        when('/todo', {
          templateUrl: 'todo/list',
          controller: 'TodoListCtrl'}).
        when('/phones/:phoneId', {
          templateUrl: 'todo/one', 
          controller: 'TodoOneCtrl'
        }).
        otherwise({
          redirectTo: '/todo'
        });
  }, '$interpolateProvider', function($interpolateProvider){
    $interpolateProvider.startSymbol('[[').endSymbol(']]');
}]);
