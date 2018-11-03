@extends('layouts.app')


@section('content')
	<H4>List Task</H4>
	
	<a href="{{ url('tasks/create') }}" class="btn btn-success btn-sm" title="Add New Task">
		<i class="fa fa-plus" aria-hidden="true"></i> Add New
	</a>
	
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Title</th>
				<th>Deskripsi</th>
				<th colspan="2">Aksi</th>
			</tr>
		</thead>
		<tbody>
		
			@foreach($tasks as $key => $task)
				<tr>
					<td>{{$key+1}}</td>
					<td>{{$task->title}}</td>
					<td>{{$task->description}}</td>
					<td>
						<a href="{{route('tasks.show', $task->id)}}" class="btn btn-primary">Detail</a>
					</td>
					<td><a href="{{route('tasks.delete', $task->id)}}" class="btn btn-danger">Hapus</a></td>
				</tr>
			@endforeach
		</tbody>
	</table>
@endsection