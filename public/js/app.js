var commentApp = angular.module('commentApp', ['mainCtrl', 'commentService']).config(function($interpolateProvider){
    $interpolateProvider.startSymbol('[[').endSymbol(']]');
});; 