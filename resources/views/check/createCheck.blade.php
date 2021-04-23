<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>create employee</title>
    <style>
        .error{
            border-width:5px;
            border-style:solid;
            width: 25%;
        }</style>
</head>
<body>

<div align="center">
    <h1>create check</h1>
<form action="{{url('check')}}" method="post">
        {{csrf_field()}}
    <label for="entry">entry time:</label>
    <input type="time" id="entry" name="entry">
    <input type="text" id="employee_id" name="employee_id" placeholder="Enter youre ID">
    <input type="submit" value="save"><br>
</form>
   <h1><strong>Hint</strong></h1><br>
   ==> to entry Leaving feld you must do up date from check table
   <form action="{{url('check')}}" method="get">
        {{csrf_field()}}
        <button type="submit" >show the time table</button>
        </form>

</div>
</body>
</html>