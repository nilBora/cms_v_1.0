<html>
  <head>
    <title>Hello</title>
     <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="http://code.angularjs.org/1.1.4/angular.min.js"></script>
     <script src="js/controllers/mainCtrl.js"></script> <!-- load our controller -->
        <script src="js/services/commentService.js"></script>
    <script src="{{ URL::asset('js/app.js') }}"></script>
   
  </head>
  <body ng-app="commentApp" ng-controller="mainController">
    <div ng-hide="loading" ng-repeat="comment in comments">
	 	
	      [[ comments.one ]]
	    <div class="container">
	      @yield('content')
	    </div>
    </div>
  </body>
</html>