<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel 9 Vite with Vue 3</title>

	@vite('resources/css/app.css')
</head>
<body>
	<div id="app">
		<router-view></router-view>
	</div>

	@vite('resources/js/app.js')
</body>
</html>