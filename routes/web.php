<?php





Route::get('/task', function () {

    $data=App\Task::all();


    return view('task')->with('tasks',$data);
});


    
Route::post('/saveTask','TaskController@store');

Route::get('/markascompleted/{id}','TaskController@updateTaskAsCompleted');

Route::get('/markasnotcompleted/{id}','TaskController@updateTaskAsNotCompleted');

Route::get('/deletetask/{id}','TaskController@deletetask');

Route::get('/updatetask/{id}','TaskController@updatetaskview');

Route::post('/updatetasks','TaskController@updatetask');