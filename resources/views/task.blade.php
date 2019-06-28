<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Tasks</title>
</head>
<body>
    <div class="container">
        <div class="text-center">
           <h1>Daily Tasks</h1> 
           <div class="row">
               <div class="col-md-12">
               @foreach($errors->all() as $error)

               <div class="alert alert-danger" role="alert">
               
               {{$error}}
               </div>


               @endforeach
                 
               <form action="/saveTask" method="POST">
                {{csrf_field()}}
                    <input type="text" class="form-control" name="task" placeholder="Enter your task">
                    <br>
                    <input type="submit" class="btn btn-primary" value="SAVE">
                    <input type="button" class="btn btn-warning" value="CLEAR">
                    <br><br>
                 
               </form>

               <table class="table table-dark" >
                    <th><center>ID</center></th>
                    <th><center>Task</center></th>
                    <th><center>Completed</center></th>
                    <th><center>Action</center></th>

                    @foreach($tasks as $task)
                    <tr>
                        <td>{{$task->id}}</td>
                        <td>{{$task->task}}</td>
                        <td>
                        @if($task->iscompleted)
                       <button class="btn btn-success">Completed</button>
                        @else
                        <button class="btn btn-warning">Not Completed</button>
                        @endif
                        </td>
                        <td>
                        @if(!$task->iscompleted)
                      
                        <a href="/markascompleted/{{$task->id}} " class="btn btn-primary">Mark As Completed</a>
                         @else
                         <a href="/markasnotcompleted/{{$task->id}} " class="btn btn-danger">Mark As Not Completed</a>
                         @endif
                         <a href="/deletetask/{{$task->id}}" class="btn btn-warning">Delete</a>
                         <a href="/updatetask/{{$task->id}}" class="btn btn-success">Update</a>
                        </td>
                    </tr>
                    @endforeach

                </table>
                  
                </div>
           </div>
        </div>

    </div>
    
</body>
</html>