<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <form action="{{ url('api/register')}}" method="POST">
        <div class="">
            <label for="">Name</label>
            <input type="text" name="name" placeholder="Enter Name">
        </div>

        <div class="">
            <label for="">Email</label>
            <input type="email" name="email" placeholder="Enter Email">
        </div>

        <div class="">
            <label for="">Password</label>
            <input type="password" name="password" placeholder="Enter Password">
        </div>

        <div>
            <button type="submit">Register</button>
        </div>

    </form>
</body>
</html>