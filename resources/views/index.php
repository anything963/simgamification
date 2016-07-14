<!doctype html>
<html lang="en" ng-app="simgamification">
<head>
    <meta charset="utf-8">
    <title>Google Phone Gallery</title>
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.css" />
    <link rel="stylesheet" href="app/app.css" />

    <script src="bower_components/jquery/dist/jquery.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.js"></script>
    <script src="bower_components/angular/angular.js"></script>
    <script src="bower_components/angular-animate/angular-animate.js"></script>
    <script src="bower_components/angular-resource/angular-resource.js"></script>
    <script src="bower_components/angular-route/angular-route.js"></script>
    <script src="app/app.js"></script>

</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Simulation and Gamification</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Badges</a></li>
                <li><a href="#">Leaderboard</a></li>
                <li><a href="#">Checklist</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Level System -->
<div class="container">
    <div class="leveling" class="text-center">
        <h2>Leveling System</h2>
        <h4>Current level and experienct points goes here.</h4>
    </div>
</div>

<!-- Container (Other gamification Section) -->
<div id="other-gamification" class="container">
    <div class="row">
        <div class="col-sm-4 col-xs-12">
            <div class="badges-container panel panel-default text-center">
                <div class="panel-heading">
                    <h1>Badges</h1>
                </div>
                <div class="panel-body">
                    <p><strong>20</strong> Lorem</p>
                    <p><strong>15</strong> Ipsum</p>
                    <p><strong>5</strong> Dolor</p>
                    <p><strong>2</strong> Sit</p>
                    <p><strong>Endless</strong> Amet</p>
                </div>
                <div class="panel-footer">
                    <h4>per month</h4>
                    <button class="btn btn-lg">Details</button>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-xs-12">
            <div class="leaderboard-container panel panel-default text-center">
                <div class="panel-heading">
                    <h1>Leaderboard</h1>
                </div>
                <div class="panel-body">
                    <p><strong>50</strong> Lorem</p>
                    <p><strong>25</strong> Ipsum</p>
                    <p><strong>10</strong> Dolor</p>
                    <p><strong>5</strong> Sit</p>
                    <p><strong>Endless</strong> Amet</p>
                </div>
                <div class="panel-footer">
                    <h4>per month</h4>
                    <button class="btn btn-lg">Details</button>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-xs-12">
            <div class="checklist-container panel panel-default text-center">
                <div class="panel-heading">
                    <h1>Checklist</h1>
                </div>
                <div class="panel-body">
                    <p><strong>100</strong> Lorem</p>
                    <p><strong>50</strong> Ipsum</p>
                    <p><strong>25</strong> Dolor</p>
                    <p><strong>10</strong> Sit</p>
                    <p><strong>Endless</strong> Amet</p>
                </div>
                <div class="panel-footer">
                    <h4>per month</h4>
                    <button class="btn btn-lg">Details</button>
                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>