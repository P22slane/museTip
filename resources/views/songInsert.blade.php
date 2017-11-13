@extends('layouts.app')

@section('content')
    <div class="container">
        {!! Form::open(['url' => 'music/submit']) !!}
        <div class="form-group">
            {{Form::label('song_name', 'Song name')}}
            {{Form::text('song_name', '',['class' => "form-control"])}}
        </div>
        <div class="form-group">
            {{Form::label('artist', 'Artist')}}
            {{Form::text('artist', '',['class' => "form-control"])}}
        </div>
        <div class="form-group">
            {{Form::label('length', 'Length')}}
            {{Form::text('length', '',['class' => "form-control"])}}
        </div>
        <div class="form-group">
            {{Form::label('album', 'Album')}}
            {{Form::text('album', '',['class' => "form-control"])}}
        </div>
        <div>
            {{Form::submit('Submit', ['class' => "btn btn-primary"])}}

        </div>
        {!! Form::close() !!}
    </div>
@endsection