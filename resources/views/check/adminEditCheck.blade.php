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
    <label for="entry">entry time:</label>
    <input type="hidden" id="entry" name="entry" value="$one_check->entry">
    <label for="Leaving">Leaving time:</label>
    <input type="time" id="Leaving" name="Leaving" value="{{$one_check->Leaving}}"> 
    <input type="submit" value="save"><br>
</form>
    <form action="{{url('check')}}" method="get">
        {{csrf_field()}}
        <button type="submit" >show the time table</button>
        </form>

</div>
</body>
</html>