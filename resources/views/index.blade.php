<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" ng-app="myApp" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" ng-app="myApp" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" ng-app="myApp" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" ng-app="myApp" class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>My AngularJS App</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--    <link rel="stylesheet" href="bower_components/html5-boilerplate/dist/css/normalize.css">-->
<!--    <link rel="stylesheet" href="bower_components/html5-boilerplate/dist/css/main.css">-->
<!--    <link rel="stylesheet" href="app.css">-->
<!--    <script src="bower_components/html5-boilerplate/dist/js/vendor/modernizr-2.8.3.min.js"></script>-->
</head>
<body>

<div ng-view></div>

<!-- In production use:
<script src="//ajax.googleapis.com/ajax/libs/angularjs/x.x.x/angular.min.js"></script>
-->
<script src="bower/angular/angular.js"></script>
<script src="bower/angular-route/angular-route.js"></script>
<script src="app/app.js"></script>
<script src="app/world/world.js"></script>
<!--<script src="app/view2/view2.js"></script>-->
<!--<script src="app/components/version/version.js"></script>-->
<!--<script src="app/components/version/version-directive.js"></script>-->
<!--<script src="app/components/version/interpolate-filter.js"></script>-->
</body>
</html>