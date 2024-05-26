<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
</head>
<body>
    <form action="{{route('login.store')}}" method="POST">@csrf
        Username<br><input type="text" name="username"><br>
        Password<br><input type="text" name="password"><br>
    <input type="submit"value="Login"> 
    </form>
</body>
</html>