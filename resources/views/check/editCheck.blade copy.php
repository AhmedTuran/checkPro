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
    {{csrf_field()}}
    {{method_field('PUT')}}
    <label for="Leaving">Leaving time:</label>
    <input type="time" id="Leaving" name="Leaving" value="{{$one_check->Leaving}}"> 
    <label for="Leaving">Leaving time:</label>
    <input type="text" id="employee_id" name="employee_id" value="{{$one_employee->id}}">
    <input type="number" id="isAdmin" name="isAdmin" value="{{$one_employee->id}}"> 
    <input type="submit" value="save"><br>
</form>
<h1><strong>Hint</strong></h1>
==>just admin can edit entry feld
    <form action="{{url('check')}}" method="get">
        {{csrf_field()}}
        <button type="submit" >show the time table</button>
        </form>

</div>
</body>
</html>