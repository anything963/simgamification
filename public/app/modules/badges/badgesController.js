(function(){
    "use strict";
    angular.module('simgamification')
        .controller("badgesController",
            ["$http", "$uibModal", badgesController]);

    function badgesController($http, $uibModal) {
        var vm = this;
        vm.notifiedBadges = [];
        vm.newBadges = [];
        var userId = 42;

        vm.open = function(size){

            var modalInstance = $uibModal.open({
                // animation: $scope.animationsEnabled,
                templateUrl: 'app/modules/badges/badgeModalView.html',
                controller: 'badgeModalController',
                size: size,
                backdrop: 'static',
                keyboard: false,
                resolve: {
                    items: function () {
                        return vm.newBadges;
                    }
                }
            });

            modalInstance.result.then(function () {
                vm.getUserBadges();
            }, function () {

            });


        };

        vm.getUserBadges = function() {
            $http.get('badges/' + userId)
                .then(function(response){
                    vm.badges = response.data;
                    vm.notifiedBadges = [];
                    vm.newBadges = [];

                    vm.badges.forEach(function(item, index, arr){
                        if(parseInt(item.notified)) {
                            vm.notifiedBadges.push(item);
                        } else {
                            vm.newBadges.push(item);
                        }
                    });

                    //open popup if new badges available
                    if(vm.newBadges.length) {
                        vm.open();
                    }

                    console.log(vm.badges);
                });
        };

        vm.getUserBadges();

        $http.get('badges')
            .then(function(response){
                vm.allBadges = response.data;
            });



    }
})();