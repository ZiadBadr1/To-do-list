<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>All Tasks</title>
</head>
<body >
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Comment</th>
        <th scope="col">pro</th>

    </tr>
    </thead>
    <tbody>
        @foreach($tasks as $task)
    <tr>
            <th scope="row">{{$task->id}}</th>
            <td>{{$task->title}}</td>
            <td>{{$task->comment}}</td>
        <td>
            <a class="btn btn-primary" href="{{route('edit',$task->id)}}" role="button">Edit</a>
            <a class="btn btn-danger" href="{{route('delete',$task->id)}}" role="button">Delete</a>
        </td>
    </tr>
        @endforeach
    </tbody>
</table>
<a class="btn btn-success" href="{{route('Add.Task')}}" role="button" style="margin-right: 25px ; margin-left: 700px">Add Task</a>
<a class="btn btn-danger" href="{{route('deleteAll')}}" role="button">Delete All</a>

</body>
</html>
