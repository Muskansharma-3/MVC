<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/upload" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="">File</label> <br>
        <input type="file" name="file"> <br>
        <button type="submit">Upload File</button>
    </form>
</body>
</html>