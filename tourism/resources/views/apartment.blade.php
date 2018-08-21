<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rent Assured</title>

		<meta charset="utf-8" name="csrf-token" content="{{ csrf_token()}}">
		<script>window.Laravel ={ CsrfToken: '{{ csrf_token() }}'}</script>

    <link rel="stylesheet" type="text/css" href="{{mix('css/app.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="{{ URL::TO('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::TO('css/fontawesome-all.min.css')}}" rel="stylesheet">
    <link href="{{ URL::TO('css/style.css') }}" rel="stylesheet">
    <link href="{{ URL::TO('css/responsive.css')}}" rel="stylesheet">

</head>
<body>

	<div id="app">

		<app></app>

	</div>

    <script src="{{ mix('js/apartment.js') }}"></script>
</body>
</html>

