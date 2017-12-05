@extends('layouts.app')

@section('content')
    <div class="container">
        {!! Form::open(['url' => 'mysong/submit']) !!}

        <div class="form-group">
            {{Form::label('name_name', 'File name')}}
            {{Form::text('file_name', '',['class' => "form-control"])}}
        </div>
        <div class="form-group">
            {{Form::label('duration', 'Duration')}}
            {{Form::text('duration', '',['class' => "form-control"])}}
        </div>
        <div class="form-group">
            {{Form::label('mfcc', 'Mfcc')}}
            {{Form::text('mfcc', '',['class' => "form-control"])}}
        </div>
        <div class="form-group">
            {{Form::label('tempo', 'Tempo')}}
            {{Form::text('tempo', '',['class' => "form-control"])}}
        </div>
        <div class="form-group">
            {{Form::label('beats', 'Beats')}}
            {{Form::text('beats', '',['class' => "form-control"])}}
        </div>
        <div class="form-group">
            {{Form::label('loudness', 'Loudness')}}
            {{Form::text('loudness', '',['class' => "form-control"])}}
        </div>
        <div class="form-group">
            {{Form::label('energy', 'Energy')}}
            {{Form::text('energy', '',['class' => "form-control"])}}
        </div>
        <div class="form-group">
            {{Form::label('class', 'Class')}}
            {{Form::text('class', '',['class' => "form-control"])}}
        </div>
        <div>
            {{Form::submit('Submit', ['class' => "btn btn-primary"])}}

        </div>
        {!! Form::close() !!}
    </div>
@endsection