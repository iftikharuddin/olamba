<?php

namespace ifti\ToDo;
use illuminate\Database\Eloquent\Model;
class Todo extends Model {
	
	protected $table = 'todos';
	
	protected $fillable = ['user_id', 'completed', 'todo'];
}