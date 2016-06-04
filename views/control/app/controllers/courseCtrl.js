TutsPoint.controller('CourseCtrl', function($scope, CourseService) {
	var getCourse = function() {
 		CourseService.getCourse().then(function(data) {
 			$scope.courses = data.data;
		}, function(error) {

 		});
 	}
	getCourse();
	$scope.addCourse = function() {
		if($scope.coursename) {
			CourseService.addCourse($scope.coursename);
			$scope.coursename = "";
			getCourse();
		}
	}
})
	// .controller('autocompleteController', function($scope, $http) {
 //  		getCountries(); // Load all countries with capitals
 //  		function getCountries(){  
 //  			$http.get("ajax/getCountries.php").success(function(data){
 //        	$scope.countries = data;
 //       	});
 //  	};
// });