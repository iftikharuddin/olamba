<?php

namespace ifti\ToDo\Http;
use App\Http\Controllers\Controller;
class ToDoController extends Controller {
	public function getUserToDoList(){
		return 'thisismy todo list';
	}
}