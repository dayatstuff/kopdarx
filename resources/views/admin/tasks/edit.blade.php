@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
        
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Edit Task #{{ $task->id }}</div>
                    <div class="card-body">
                        <a href="{{ url('/manage/tasks') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

        <form method="POST" action="{{ url('/manage/tasks/' . $task->id) }}"
             accept-charset="UTF-8" 
             class="form-horizontal" 
             enctype="multipart/form-data">

            {{ method_field('PATCH') }}
            {{ csrf_field() }}

            {{-- @include ('admin.tasks.form', ['formMode' => 'edit']) --}}

            <div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
                    <label for="title" class="control-label">{{ 'Title' }}</label>
                    <input class="form-control" name="title" type="text" 
                    id="title" value='{{ $task->title }}'>
                    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
                </div>
                
            <div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
                <label for="description" class="control-label">{{ 'Description' }}</label>
                <input class="form-control" name="description" type="text" 
                id="description" value='{{ $task->description }}'>
                {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
            </div>
            
            
            <div class="form-group">
                <input class="btn btn-primary" type="submit" value='Update'>
                {{-- value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}"> --}}
            </div>

        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
