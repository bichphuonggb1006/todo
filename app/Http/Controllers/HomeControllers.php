<?php

namespace App\Http\Controllers;

class HomeControllers extends Controller
{
    public function index()
    {
        return view('todo.home');
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
