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
		//define the path for the view files
		$this->loadViewsFrom(__DIR__.'/../views', 'todo');
		
		$this->publishes([
			__DIR__. '/migrations/2016_30_7_00000_create_todo_table.php' => base_path('database/migrations/2016_30_7_00000_create_todo_table.php'),
		]);
	}
}