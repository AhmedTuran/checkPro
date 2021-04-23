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
<form action="{{url('check'.$one_check->id)}}" method="post">
        @csrf
        {{method_field('PUT')}}
    <label for="Leaving">Leaving time:</label>
    <input type="time" id="Leaving" name="Leaving" > 
    <label for="Leaving">Leaving time:</label>
    
    <input type="submit" value="save"><br>
</form>
<h1><strong>Hint</strong></h1>
==>just admin can edit entry feld
    <form action="{{url('check',$one_check->employee_id)}}" method="get">
        {{csrf_field()}} هذا الرابط يأخذني على الشو فانكشن
        <button type="submit" >show the time table</button>
        </form>

</div>
</body>
</html>