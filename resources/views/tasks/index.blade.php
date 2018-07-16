<!DOCTYPE HTML>
<html>
<head>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
</head>
<body>
    <h3>Tasks</h3> 

    @foreach($tasks as $task)
    <ul>
        <li><a href="/tasks/{{ $task->id }}">{{ $task->body }}</a></li>
    </ul>
    <ul>
        <li>{{ $task->completed }}</li>
    </ul>
    @endforeach
</body>
</html>