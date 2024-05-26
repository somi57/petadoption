<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('adoptionform.store') }}" method="post"> @csrf
        Full Name<input type="text" name="name"><br>
        Address<input type="text" name="address"><br>
        Email<input type="text" name="email"><br>
        Age<input type="number"name="age"><br>
        Number<input type="number"name="number"><br>
        How did you know about us?
        <input id="Friends" type="checkbox" > <label for="friends">Friends</label>
        <input id="Family" type="checkbox" > <label for="family">Family</label>
        <input id="Social media" type="checkbox" > <label for="socialmedia">Social media</label>
        <input id="Others" type="checkbox" > <label for="others">Others</label><br>
        Why do you want to adopt pets?<br>
        <input type="text">
        <input type="submit" value="Submit">

    </form>
</body>
</html>
{{-- @include('contact'); --}}