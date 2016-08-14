(function(){
    "use strict";
    angular.module('simgamification')
        .controller("checklistController",
            ["$http", checklistController])

    function checklistController($http) {
        var vm = this;
        var userId = 42;

        $http.get('checklist/' + userId)
            .then(function(response){
                vm.checklist = response.data;
                console.log(vm.checklist);
            });

    }
})();