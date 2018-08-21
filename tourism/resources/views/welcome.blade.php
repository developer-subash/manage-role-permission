<!DOCTYPE html>
<html>
<head>
    <title>Checking</title>
</head>
<body>

@if(Auth::check())
    <div>
        
        <a href="">admin</a>
        <a href="">editor</a>
        <a href="">public</a>

    </div>

@else

<li><a href="{{ url('login')}}" class="btn btn-sm">Login</a></li>

@endif    

</body>
</html>