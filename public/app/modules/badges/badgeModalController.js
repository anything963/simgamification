(function() {
    "use strict";

    angular.module('simgamification')
        .controller("badgeModalController",
            ["$scope","$uibModalInstance",  "items", "$http", badgeModalController]);

    function badgeModalController($scope, $uibModalInstance, items, $http){
        $scope.items = items;
console.log(items);

        $scope.ok = function () {
            $http.post('badges/update', {data: items})
                .then(function(response){
                    // if(parseInt(response.data)) {
                    //
                    // }

                    $uibModalInstance.close();
                });

        };

        $scope.cancel = function () {
            $uibModalInstance.dismiss('cancel');
        };
    }



})();

