<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employees Table</title>
</head>
<body>
<div align="center">
   <h1 align="center">Employees Table</h1><br>
    <table border="1">
        <thead border="1">
        <tr>
            <th><h3><strong>Id</strong></h3></th>
            <th><h3><strong>Name</strong></h3></th>
            <th><h3><strong>password </strong></h3></th>
            <th><h3><strong>salary</strong></h3></th>
            <th><h3><strong>Is Admin</strong></h3></th>
            
            
        </tr>
        </thead>
        <tbody>
        @foreach($allEmployees as $employee)
        <tr>
            <th>{{$employee->id}}</th>
            <th>{{$employee->full_name}}</th>
            <th>{{$employee->password}}</th>
            <th>{{$employee->salary}}</th>
            <th>{{$employee->isAdmin}}</th>
            <td>
                
                
            </td> 
           
        @endforeach
        </tbody>

    </table>
    <div border="2px solid powderblue">
        <form action="{{url('employee',$employee->id)}}" method="get">
        @csrf
        <input type="text" name="id" id="id" placeholder="fined by id"><br>
        <input type="submit" value="searsh by id">
        </form></div>
        
    @if($employee->isAdmin == 1)
    <form action="{{url('employee/create')}}" method="get">
        {{csrf_field()}}
        <button type="submit" >creat new Employee</button> 
        </form><br><br>
        
        @endif
       
</div>
<div>
<h1>Hint</h1> 
# on admin culomn:<br>
 -> 1 is mean he is admin<br>
 -> 0 is mean he isn't admin<br>
</div>
</body>
</html>