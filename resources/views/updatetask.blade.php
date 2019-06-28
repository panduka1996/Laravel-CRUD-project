<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>

    <br><br><br>

    <div class="container">
        <form action="/updatetasks" method="post">
            {{csrf_field()}}
            <input type="text" class="form-control" name="task" value="{{$taskdata->task}}"><br>
            <input type="hidden" name="id" value="{{$taskdata->id}}">
           <center><input type="submit" class="btn btn-warning" value="Update">
            <input type="button" class="btn btn-danger" value="Cancel"></center> 
        </form>
    </div>
    
</body>
</html>