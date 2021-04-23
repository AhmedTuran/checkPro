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
   <h1 align="center">checks Table</h1><br>
    <table border="1">
        <thead border="1">
        <tr>
            <th><h3><strong>entry</strong></h3></th>
            <th><h3><strong>Leaving </strong></h3></th>
            <th><h3><strong>operation</strong></h3></th>
        </tr>
        </thead>
        <tbody>
        @foreach($allCheck as $check)
        <tr>
            <th>{{$check->entry}}</th>
            <th>{{$check->Leaving}}</th>
            
            <td>
                <form action="{{url('check'.$check->id.'edit')}}" method="get">
                    {{csrf_field()}}
                    <button type="submit" >up date</button>
                </form><br>
                <form action="{{url('check/create')}}" method="get">
                 {{csrf_field()}}
        <button type="submit" >creat new check</button> </form>
            </td>
        </tr>
        @endforeach
        </tbody>
        <tfoot></tfoot>
    </table>
    </div>
</body>
</html>