tutsPoint.controller('LoginCtrl', ['$scope', 'Auth','$state', function($scope, Auth, $state) {
 $scope.login = function() {
  Auth.login($scope.user).then(function(data) {
  	Auth.loggedIn = data;
   $state.go('dashboard');
  }, function(data) {
   console.log(JSON.stringify(data));
  });
 }
}]);
