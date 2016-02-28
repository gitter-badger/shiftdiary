<!DOCTYPE html>
<html lang="en-US" ng-app="shiftDiary">
<head>
<title>Shift Diary</title>

<!-- Load Bootstrap CSS -->
<link href="<?= asset('css/bootstrap.min.css') ?>" rel="stylesheet">
</head>
<body>
	<!-- HEADER AND NAVBAR -->
	<header>
		<nav class="navbar navbar-default">
			<div class="container">
				<div class="navbar-header">
					<a class="navbar-brand" href="#/">Shift Diary</a>
				</div>

				<ul class="nav navbar-nav navbar-right">
					<li><a href="#/"><i class="fa fa-home"></i> Today</a></li>
					<li><a href="#/diaries"><i class="fa fa-home"></i> Diaries</a></li>
					<li><a href="#/employees"><i class="fa fa-shield"></i> Employees</a></li>
					<li><a href="#/texts"><i class="fa fa-shield"></i> Texts</a></li>
					<li><a href="#/notifications"><i class="fa fa-shield"></i> Notifications</a></li>
				</ul>
			</div>
		</nav>
	</header>
	<div ng-controller="mainController">
		<div id="main">
			<div ng-view></div>
		</div>
	</div>
	<!-- Load Javascript Libraries (AngularJS, JQuery, Bootstrap) -->
	<script
		src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.9/angular.js"></script>
	<script
		src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.4.9/angular-route.js"></script>
	<script src="https://code.jquery.com/jquery-2.2.1.js"></script>
	<script src="<?= asset('js/bootstrap.min.js') ?>"></script>

	<!-- AngularJS Application Scripts -->
	<script src="<?= asset('app/app.js') ?>"></script>	
	<script src="<?= asset('app/controllers/mainController.js') ?>"></script>
	<script src="<?= asset('app/controllers/employeesController.js') ?>"></script>
	<script src="<?= asset('app/controllers/diariesController.js') ?>"></script>
	<script src="<?= asset('app/controllers/notificationsController.js') ?>"></script>
	<script src="<?= asset('app/controllers/textsController.js') ?>"></script>
</body>
</html>