@extends('layouts.app')

@section('content')

<!-- Write content for each page here -->
	<h1>id = {{ $task->id }}のタスク編集ページ</h1>
	<div class="col-xs-12 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
	{!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
	<div class="form-group">
		{!! Form::label('content', 'タスク') !!}
		{!! Form::text('content', null, ['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('status','status:') !!}
		{!! Form::text('status', null, ['class' => 'form-control']) !!}
	</div>
		{!! Form::submit('update', ['class' => 'btn btn-info']) !!}
	
	{!! Form::close() !!}
	</div>
@endsection