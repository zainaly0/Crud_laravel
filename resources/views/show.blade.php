<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>show data</title>
</head>
<body>
    <a href="{{route('form')}}"><button>add</button></a>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>eamil</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datas as $data)
            <tr>
                <td>{{$data->id}}</td>
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>
                <td>
                    <a href="{{route('edit', $data->id)}}"><button>Edit</button></a>
                    <a href="{{route('delete', $data->id)}}"><button>delte</button></a>

                </td>
            </tr>
                
            @endforeach
        </tbody>
    </table>
    
</body>
</html>