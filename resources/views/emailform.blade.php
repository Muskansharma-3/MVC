<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/email" method="post">
        @csrf
        <label for="">Enter receiver's mail</label> <br>
        <input type="email" name="to"> <br>
        <label for="">Enter subject: </label> <br>
        <input type="text" name="subject"> <br>
        <label for="">Enter Message</label> <br>
        <input type="text" name="message"> <br>
        <button type="submit">Send Mail</button>
    </form>
</body>
</html>