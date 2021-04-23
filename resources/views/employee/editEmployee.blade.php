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
@if ($errors -> any())
    <h2><strong>Error</strong></h2>
    <ul>
    @foreach($errors -> all() as $error)
        <li>{{$error}}</li>
        </ul>
    @endforeach
    @endif
    <h1>edit employee</h1>
<form action="{{url('employee/'.$one_employee->id)}}" method="post">
<input type="hidden" name="id" value="{{ $one_employee->id }}" />
        @csrf
        {{method_field('PUT')}}
    <label for="full_name">Employee Name: </label>
    <input type="text" name="full_name" value="{{$one_employee->full_name}}" ><br>
    <label for="password">password: </label>
    <input type="password" name="password" value="{{$one_employee->password}}" ><br>
    <label for="salary">salary:</label>
    <input type="text" name="salary" value="{{$one_employee->salary}}"><br>
    <input type="radio" id="isAdmin" name="isAdmin" value="1">
    <label for="isAdmin"> is Admin</label><br>
    <input type="radio" id="isntAdmin" name="isAdmin" value="0">
    <label for="isntAdmin"> isn't Admin</label><br>
    <input type="submit" value="save"><br>
</form>
    <form action="{{url('employee')}}" method="get">
        {{csrf_field()}}
        <button type="submit" >show the employees</button>
        </form>

</div>
</body>
</html>
