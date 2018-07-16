<!DOCTYPE HTML>
<html>
<head>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
</head>
<body>
    <h3>Task: {{ $task->id }} </h3> 
 
    <ul>
        <li>{{ $task->body }}</li>
    </ul>
    <ul>
        <li>{{ $task->completed }}</li>
    </ul>

</body>
</html>