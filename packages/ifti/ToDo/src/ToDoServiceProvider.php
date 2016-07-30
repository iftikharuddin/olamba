<?php

namespace ifti\ToDo;
use Illuminate\Support\ServiceProvider;

class ToDoServiceProvider extends ServiceProvider{
	public function register(){
		$this->app->bind('ToDo', function($app){
			return new ToDo;
			 
		});
	}
	public function boot(){
		require __DIR__ .'/Http/routes.php';
	}
}