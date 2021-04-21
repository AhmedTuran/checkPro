<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div align="center">
   <h1 align="center">Employees Table</h1><br>
    <table border="1">
        <thead border="1">
        <tr>
            <th><h3><strong>Name</strong></h3></th>
            <th><h3><strong>password </strong></h3></th>
            <th><h3><strong>salary</strong></h3></th>
            <th><h3><strong>Is Admin</strong></h3></th>
            <th><h3><strong>operation</strong></h3></th>
        </tr>
        </thead>
        <tbody>
        @foreach($allEmployees as $employee)
        <tr>
            <th>{{$employee->full_name}}</th>
            <th>{{$employee->password}}</th>
            <th>{{$employee->salary}}</th>
            <th>{{$employee->isAdmin}}</th>
            <td>
                <form action="{{url('employee/'.$employee->id.'/edit')}}" method="get">
                    {{csrf_field()}}
                    <button type="submit" >up date</button>
                </form>
                <form action="{{url('employee',$employee->id)}}" method="post">
                {{csrf_field()}}
                    {{method_field('DELETE')}}
                    <button type="submit" >delete</button>
                </form>
                
            </td>
        </tr>
        @endforeach
        </tbody>
        <tfoot></tfoot>
    </table>
    <form action="{{url('employee/create ')}}" method="get">
        {{csrf_field()}}
        <button type="submit" >creat new Employee</button> </form>
        "لكل موظف حسب $id لا تنسى زر إضافة مواعيد الدخول و الخروج"
</div>
<div>
<h1>Hint</h1> 
# on admin culomn:<br>
 -> 1 is mean he is admin<br>
 -> 0 is mean he isn't admin<br>
</div>
</body>
</html>