<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" />
    <style>
        form{
            width: 350px;
            background-color: #eee;
        }
        input,textarea{
            border: 0;
            outline: 0;
            border-bottom: 2px solid #0d6efd;
        }
    </style>
    <title>Add Task</title>
</head>
<body style="margin-top: 150px" >
<h3 style="margin-left: 700px">Edit Task</h3>
<form action="{{route("update",$post->id)}}" method="post" class="p-3 d-flex flex-column mx-auto mt-5 shadow-lg rounded">
    @csrf
    @method("PUT")
    <label>Title</label>
    <input type="text" name="title" class="mb-4 rounded" value="{{$post->title}}">
    <label>Comment</label>
    <textarea name="comment" >{{$post->comment}}</textarea>
    <button class="btn bg-success w-50 text-white mx-auto mt-3">Edit</button>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
