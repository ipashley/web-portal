<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>LOGIN FORM</h2>
    <form  method="post" action="{{route('store')}}">
        @csrf
        @method('post')
    <div>
        <label for="username">Enter Username: </label>
        <input type="text" name="username" id="" placeholder="username"> <br>
    </div>
    <br>
    <div>
    <label for="username">Enter Password: </label>
        <input type="password" name="password" id="" placeholder="password"> <br>
    </div>
    <br>
    <div>
        <input type="button" value="Submit">
    </div>
    </form>
</body>
</html>