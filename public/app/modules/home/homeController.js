(function(){
    "use strict";

    angular.
    module('simgamification')
        .controller("homeController",["$timeout", "$state", "$http", homeController] );

    function homeController($timeout, $state, $http){
        var userId = 42;
        var vm = this;
        vm.progressValue = 0;
        vm.countFrom = 0;
        vm.notifiedBadges = [];
        vm.newBadges = [];

        $timeout(function(){

        }, 200);

        $http.get('user/' + userId)
            .then(function(response){
               console.log(response);
                vm.user = response.data[0];
                var currentValue = parseInt(vm.user.experience) % 250;
                vm.countTo = currentValue;
                vm.progressValue = currentValue;
            });

        $http.get('leaderboard')
            .then(function(response){
                vm.leaderboard = response.data;
            });

        $http.get('checklist/' + userId)
            .then(function(response){
                vm.checklist = response.data;
            });

        $http.get('badges/' + userId)
            .then(function(response){
                vm.badges = response.data;

                vm.badges.forEach(function(item, index, arr){
                    if(parseInt(item.notified)) {
                        vm.notifiedBadges.push(item);
                    } else {
                        vm.newBadges.push(item);
                    }
                });
            });
    }
})();