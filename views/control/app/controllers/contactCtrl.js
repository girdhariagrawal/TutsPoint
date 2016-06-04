angular.module('TutsPoint', ['ui.bootstrap'])
 
 	.controller('ContactCtrl', function($scope) {
 		$scope.saveContact = function() {
 			if($scope.our && $scope.our.address && $scope.our.email && $scope.our.phone) {
 				console.log("Contact Saved!! Need to save to database");
 			}
 		}
 	})
});