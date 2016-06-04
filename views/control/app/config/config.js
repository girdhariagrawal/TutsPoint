tutsPoint.config(['$stateProvider', '$urlRouterProvider', function($stateProvider, $urlRouterProvider) {
$urlRouterProvider.otherwise('/login');
 $stateProvider
     .state('/', {
      url : '/',
      abstract : true
     })
  .state('login', {
    url : '/login',
    templateUrl : 'login.html',
   })
   .state('dashboard', {
     url : '/dashboard',
     abstract : true,
     templateUrl : 'dashboard.html',
    })
    .state('dashboard.manageuser', {
     url : '/mangeuser',
     templateUrl : 'users.html'
    })
    .state('dashboard.managecourse',{
     url : '/managecourse',
     templateUrl : 'managecourse.html'
    })
    .state('dashboard.managecontent', {
     url : '/coursecontent',
     templateUrl : 'managecourse.html'
    })
    .state('dashboard.contactus', {
     url : '/contactus',
     templateUrl : 'contactus.html'
    });
}]);
