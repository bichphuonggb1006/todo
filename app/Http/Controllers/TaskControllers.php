<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class TaskControllers extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = DB::table('tasks')->select('*');
        $tasks = $tasks->get();
        return view('todo.index', compact('tasks'));
    }
    public function getSearch()
    {
        return view('todo.home');
    }
    public function add()
    {
        return view('todo.add');
    }
    public function postAdd()
    {
        return redirect(route('index'));
    }
    public function update()
    {
        return view('todo.update');
    }
    public function postUpdate()
    {
        return redirect(route('index'));
    }
}
