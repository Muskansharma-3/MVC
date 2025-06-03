<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>This is welcome1 view</p>
    @if(session('user')){
        <p>Welcome, {{session('user')}} <a href='/logout'>Logout</a></p>
    }
    @else{
        <p>No user found <a href="/login">Login</a></p>
    }
    @endif 
    {{print_r(session('alldata'))}};
</body>
</html>