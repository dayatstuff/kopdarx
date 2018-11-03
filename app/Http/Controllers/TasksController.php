<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;

class TasksController extends Controller
{
	// function __construct()
	// {
	// 	$this->middleware('auth');
	// }
    //
    function index() {
    	// select * from tasks;
        $tasks = Task::all();

        // dd($tasks);

        return view('tasks.index', [
        	'tasks' => $tasks
        ]);

	}
	
	public function create() 
	{
		return view('tasks.create');
	}

    public function show($id)
    {
    	$tasks = Task::find($id);
    	// dd($tasks);
    	// select * from where id=$id;
    	return view('tasks.show', [
    		'tasks' => $tasks
    	]);
    }

    public function delete($id)
    {
    	$tasks = Task::find($id)->delete();
    	return redirect('/tasks');
	}
	
}
