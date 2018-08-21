<!DOCTYPE html>
<html>
<head>

		<meta charset="utf-8" name="csrf-token" content="{{ csrf_token()}}">
		<script>window.Laravel ={ CsrfToken: '{{ csrf_token() }}'}</script>
	<title>User Dashbaord</title>
	<link rel="stylesheet" type="text/css" href="{{mix('css/app.css')}}">
</head>
<body>

	<div id="app">

		<app></app>

	</div>

    <script src="{{ mix('js/users.js') }}"></script>
</body>
</html>

