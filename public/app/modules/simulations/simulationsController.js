(function(){
    "use strict";

    angular.module('simgamification')
        .controller("simulationsController",
            ["$http", simulationsController]);

    function simulationsController($http) {
        var vm = this;
        var userId = 42;
        vm.simulations = null;
        vm.graphSimulation = null;
        vm.dataSource = null;
        vm.actions = null;

        $http.get('simulations')
            .then(function (response) {
                vm.simulations = response.data;
                console.log(response.data);
            });

        function getSimulation(simulationId) {
            vm.graphSimulation = null;
            if (vm.simulations) {
                vm.simulations.some(function (simulation, index, arr) {
                    if (simulation.simulation_id == simulationId) {
                        vm.graphSimulation = simulation;
                        return true;
                    } else {
                        return false;
                    }
                });
            } else {
                return null;
            }

        }

        vm.dataSource = {
            "chart": {
                "caption": "Select a simulation",
                "captionFontSize": "20",
                // more chart properties - explained later
            },
            "data": [
            ]
        };
console.log(vm.dataSource.data);
        vm.drawChart = function (simulationId) {
            vm.actions = null;
            console.log(simulationId);
            getSimulation(simulationId);
            var simulation = vm.graphSimulation;

            if (simulation) {
                vm.actions = [];
                var dataActions = [];
                simulation.actions.forEach(function (action, index, arr) {
                    dataActions.push({
                        "label": 'Id-' + action.sim_action_id,
                        "value": action.avg_score
                    });
                    vm.actions.push(action);
                });


                vm.dataSource = {
                    "chart": {
                        "caption": simulation.name,
                        "captionFontSize": "20"
                    },
                    "data": dataActions
                };
            } else {
                vm.dataSource = null;
            }

            console.log(vm.dataSource);

            // vm.dataSource = {
            //     "chart": {
            //         "caption": "Column Chart Built in Angular!",
            //         "captionFontSize": "30",
            //         // more chart properties - explained later
            //     },
            //     "data": [{
            //         "label": "CornflowerBlue",
            //         "value": "41"
            //     }, //more chart data
            //     ]
            // };
            //
            // console.log(vm.dataSource);
        }
    }
})();