@extends('layouts.app')

@section('content')

<!-- Write content for each page here -->
@if (Auth::check())
	<h1>My Tasks</h1>
	@if (count($tasks) > 0)
		<table class="table table-striped">
			<thead>
				<tr>
					<th>id</th>
					<th>task</th>
					<th>status</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($tasks as $task)
					<tr>
						<td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}</td>
						<td>{{ $task->content }}</td>
						<td>{{ $task->status }}</td>
					</tr>
			@endforeach
			</tbody>
		</table>
	@endif
@else
	<div class="center jumbotron">
        <div class="text-center">
            <h1>Wilkommen in der Taskliste</h1>
            {!! link_to_route('signup.get', 'Sign up now!', null, ['class' => 'btn btn-lg btn-primary']) !!}
        </div>
    </div>
@endif

@endsection