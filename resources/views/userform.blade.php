<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- {{print_r($errors)}} -->
    <!-- @if($errors->any())
    @foreach($errors->all() as $error)
        <div style="color: red;">
            {{$error}}
        </div>
    @endforeach
    @endif -->
    <form action="/usercont" method="post">
        @csrf  <!-- This token is required for form security -->
        <label for="">Name: </label>
        <input type="text" name="username" placeholder="Enter your name" id="username" value="{{old('username')}}">
        <span style="color:red">@error('username'){{$message}}@enderror</span>
        <br><br>
        <label for="">Password: </label>
        <input type="password" name="password" placeholder="Enter your password"  id="password" value="{{old('password')}}">
        <span style="color:red">@error('password'){{$message}}@enderror</span>
        <br> <br> 
        <button type="submit">Submit</button>
    </form>
</body>
</html>