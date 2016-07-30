<?php

namespace ifti\ToDo\Http;
use App\Http\Controllers\Controller;
use ifti\ToDo\Todo;
class ToDoController extends Controller 
{
	public function getUserToDoList(){
		
		$todos = Todo::orderBy('created_at')->get();
		return view("todo::todo-list", compact('todos'));
	}
}