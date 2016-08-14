(function(){
    "use strict";

    angular.module('simgamification')
        .controller("simulationsController",
            ["$http", simulationsController]);

    function simulationsController($http){
        var vm = this;
        var userId = 42;
        vm.simulations = null;

        $http.get('simulations')
            .then(function(response){
                vm.simulations = response.data;
                console.log(response.data);
            })
    }

})();