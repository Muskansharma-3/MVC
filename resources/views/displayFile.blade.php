<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Display image if file is an image -->
    <img src="{{asset('storage/uploads/' . $path) }}" alt="Uploaded Image">
    <!-- Display download link if file is not an image -->
    <p><a href="{{ asset('storage/uploads/' . $path) }}" download>Download File</a></p>
</body>
</html>