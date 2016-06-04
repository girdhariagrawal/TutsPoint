angular.module('TutsPoint')
 
 	.controller('CourseContentCtrl', function($scope, CourseService) {
 		$scope.saveCourse = function() {
 			if($scope.course.text) {
 				CourseService.saveTextCourse($scope.course.text).then(function(data) {
 					console.log(data);
 					console.info("Saved Successfully");
 				}, function() {
 					console.error("Error While Saving");
 				});
 			}
 		}

 	});
