<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Information here</h1>
    <form action="{{ route('pinfo.store') }}" method="post"> @csrf
        <input type="text" name="name">
        <input type="number" name="age">
        <input type="date" name="dob">
        <input type="submit" value="Submit">
    </form>
    
</body>
</html>