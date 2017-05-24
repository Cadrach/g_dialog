'use strict';

angular.module('myApp.world', ['ngRoute'])

.config(['$routeProvider', function($routeProvider) {
  $routeProvider.when('/world', {
    templateUrl: 'app/world/world.html',
    controller: 'WorldCtrl',
      resolve: {
          world: function($http){return $http.get('api/world').then(function(r){return r.data;})}
      }
  });
}])

.controller('WorldCtrl', ['$scope', 'world', function($scope, world) {
        angular.extend($scope, world);
}]);