var TutsPoint = angular.module('TutsPoint',[])// ['textAngular','ngResource'])
	.factory('CourseService', function($http) {
		factory = {};
		factory.saveTextCourse = function(course) {
			course.action = 'publish';
			return $http({
				method : 'POST',
				url : "../api/controllers/textContentCtrl.php",
				data   :  course,
				headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
			});
		};
		factory.addCourse = function(course) {
			content = {'coursename' : course, 'action' : 'add'};
			return $http({
				method : 'POST',
				url    : '../api/controllers/courseCtrl.php',
				data   :  content,
				headers: {'Content-Type': 'application/x-www-form-urlencoded'}
			});
		};
		factory.getCourse = function() {
			content = {'action' : 'getAll'};
			return $http({
				method : 'POST',
				url    : '../api/controllers/courseCtrl.php',
				data   :  content,
				headers: {'Content-Type': 'application/x-www-form-urlencoded'}
			})
		}
		return factory;
	});