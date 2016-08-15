<!doctype html>
<html lang="en" >
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Gamification of Simulation</title>
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.css" />
    <link rel="stylesheet" href="bower_components/angular-bootstrap/ui-bootstrap-csp.css" />
    <link rel="stylesheet" href="app/app.css" />

    <script src="bower_components/jquery/dist/jquery.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.js"></script>
    <script src="bower_components/angular/angular.js"></script>
    <script src="bower_components/angular-animate/angular-animate.js"></script>
    <script src="bower_components/angular-resource/angular-resource.js"></script>
    <script src="bower_components/angular-route/angular-route.js"></script>
    <script src="bower_components/angular-bootstrap/ui-bootstrap.js"></script>
    <script src="bower_components/angular-bootstrap/ui-bootstrap-tpls.js"></script>
    <script src="lib/angular-ui-router/angular-ui-router.js"></script>

    <script src="lib/angular-count-to/angular-count-to.js"></script>

    <!-- Application -->
    <script src="app/app.js"></script>
    <script src="app/modules/home/homeController.js"></script>
    <script src="app/modules/leaderboard/leaderboardController.js"></script>
    <script src="app/modules/checklist/checklistController.js"></script>
    <script src="app/modules/badges/badgesController.js"></script>
    <script src="app/modules/badges/badgeModalController.js"></script>
    <script src="app/modules/simulations/simulationsController.js"></script>

    <!-- FusionCharts library-->
    <script type="text/javascript" src="lib/fusion/fusioncharts.js"></script>
    <script type="text/javascript" src="lib/fusion/fusioncharts.charts.js"></script>

    <!-- Angular plugin -->
    <script type="text/javascript" src="lib/fusion/angular-fusioncharts.min.js"></script>
</head>
<body ng-app="simgamification">

    <!-- Navbar -->
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="row">
                <div class="navbar-header col-sm-6">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" ui-sref="home">Simulation and Gamification</a>
                </div>
                <div class="collapse navbar-collapse col-sm-6" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a ui-sref="simulations">My Simulations</a></li>
                        <li><a ui-sref="badges">Badges</a></li>
                        <li><a ui-sref="leaderboard">Leaderboard</a></li>
                        <li><a ui-sref="checklist">Checklist</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </nav>

    <div ui-view class="view-inject"></div>

</body>
</html>
