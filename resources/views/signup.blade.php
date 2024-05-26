<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
</head>
<body>
    <form action="{{route('signup.store')}}"method="POST">@csrf
        Name <br><input type="text" name="name"><br>
        Address <br><input type="text" name="address"><br>
        Age<br><input type="number" name="age"><br>
        Email<br><input type="text" name="email"><br>
        Contact Number<br><input type="number" name="number"><br>
        Password<br><input type="password"name="password"><br>
        Rewrite Password<br><input type="password"name="repass"><br>
        <input type="submit" value="SignUp">

    </form>
   
</body>
</html>
