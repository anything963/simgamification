/**
 * Created by suba on 7/12/2016.
 */

(function(){
    "use strict";
    
    var app = angular.module('simgamification',
                    ["ngAnimate",
                        "ui.bootstrap",
                        "countTo"]);
    
    app.controller("homeController",["$timeout", homeController] );
    
    function homeController($timeout){
        var vm = this;
        var currentValue = 100;
        vm.progressValue = 0;
        vm.countTo = currentValue;
        vm.countFrom = 0;

        $timeout(function(){
            vm.progressValue = currentValue;
        }, 200);
    }
})();