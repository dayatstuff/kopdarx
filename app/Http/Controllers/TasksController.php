<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task ;

class TasksController extends Controller
{
    //
    function index() {

        $tasks = Task::all() ;

        return view('task', ['tasks' => $tasks]) ;

    }
}
