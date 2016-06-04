tutsPoint.service('Auth',['$http', function($http) {
 var factory = {};
 var loggedIn = "";
 factory.login = function(user) {
  return $http({
    method : "POST",
    url    : "../api/controllers/authentication.php",
    data   : {
    	name : user.name,
    	password : user.password
    },
    headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
  });
 }
 
 return factory;
}]);
