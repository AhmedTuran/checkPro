<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
<div align="center">
<h1><strong>Login</strong></h1>
<form action="{{url('login')}}" method="post">
@csrf
<input type="text" name="name" id="name" placeholder="Username"><br>
<input type="text" name="password" id="password" placeholder="password"><br>
<input type="submit" value="login">

</form>
</div>
    
</body>
</html>