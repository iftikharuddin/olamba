<h1>All Todos List</h1>
@foreach($todos as $todo)
	<li>{{ $todo->todo }}<br></li>
@endforeach