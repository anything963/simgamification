/**
 * Created by suba on 7/12/2016.
 */

(function(){
    "use strict";

    var app = angular.module('simgamification',
        ["ngAnimate",
            "ui.bootstrap",
            "countTo",
            "ui.router"]);

    app.config(
        [
            "$stateProvider", "$urlRouterProvider",
            function($stateProvider, $urlRouterProvider){
                $urlRouterProvider.otherwise("/");
                $stateProvider
                    .state("home", {
                        url: "/",
                        templateUrl: "app/modules/home/homeView.html",
                        controller: "homeController as vm"
                    })
                    .state("simulations", {
                        url: "/simulations",
                        templateUrl: "app/modules/simulations/simulationsView.html",
                        controller: "simulationsController as vm"
                    })
                    .state("leaderboard", {
                        url: "/leaderboard",
                        templateUrl: "app/modules/leaderboard/leaderboardView.html",
                        controller: "leaderboardController as vm"
                    })
                    .state("badges", {
                        url: "/badges",
                        templateUrl: "app/modules/badges/badgesView.html",
                        controller: "badgesController as vm"
                    })
                    .state("checklist", {
                        url: "/checklist",
                        templateUrl: "app/modules/checklist/checklistView.html",
                        controller: "checklistController as vm"
                    });
            }
        ]
    );
})();