(function(){
    "use strict";
    angular.module('simgamification')
        .controller("leaderboardController",
            ["$http", "$timeout", leaderboardController]);

    function leaderboardController($http, $timeout) {
        var vm = this;
        vm.progressValue = [
            {'avg_sim_score': 0},
            {'avg_sim_score': 0},
            {'avg_sim_score': 0},
            {'avg_sim_score': 0},
            {'avg_sim_score': 0}
    ];

        $http.get('leaderboard')
            .then(function(response){
                vm.leaderboard = response.data;
                $timeout(function(){
                    for(var i = 0; i < vm.leaderboard.length; i++) {
                        vm.progressValue[i].avg_sim_score = vm.leaderboard[i].avg_sim_score;
                    }
                }, 100);
            });
    }
})();