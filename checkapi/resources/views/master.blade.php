<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset("css/bootstrap.min.css")}}" rel="stylesheet">
    <link href="{{asset("css/fontawesome-all.min.css")}}" rel="stylesheet">
    
    <title>Document</title>
</head>
<body>
    
    <main>
        <section class="content-block">
            <div class="container">
                @yield('content')
            </div>
        </section>
    </main>

    <script type="text/javascript" src="{{asset("js/bootstrap.min.js")}}"></script>

</body>
</html>