@extends('layouts.app')

@section('content')
    <div class="container ">
        <div class="contPanel mainText contCentre">
            <div class="">
                @if(count($songData)>0)

                    <h3 class="" style="text-align: center;"><b>File name: {{$fileName}}</b></h3>
                    <h2 class="" style="text-align: center;">{{$songData["score"]}}%</h2>

                <h3 style="text-align: center; margin-bottom: 0px;"><b>Details</b></h3>
                <table class="table table" >
                    <thead>
                    <tr>
                        <th style="width: 20%;"></th>
                        <th></th>
                        <!--th></th-->
                    </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td><b>Duration</b></td>
                            <td>{{number_format($songData["duration"],2)}}</td>
                        </tr>
                        <tr>
                            <td><b>Mfcc</b></td>
                            <td>{{number_format($songData["mfcc"],2)}}</td>

                        </tr>
                        <tr>
                            <td><b>Tempo</b></td>
                            <td>{{number_format($songData["tempo"],2)}}</td>

                        </tr>
                        <tr>
                            <td><b>Beats</b></td>
                            <td>{{number_format($songData["beats"],2)}}</td>

                        </tr>
                        <tr>
                            <td><b>Loudness</b></td>
                            <td>{{number_format($songData["loudness"],2)}}</td>

                        </tr>
                        <tr>
                            <td><b>Energy</b></td>
                            <td>{{number_format($songData["energy"],2)}}</td>
                        </tr>


                    </tbody>
                </table>
                    {!! Form::open(['url' => 'addMySongs']) !!}
                    <div class="form-group">
                        {{Form::hidden('file_name', $fileName)}}
                        {{Form::hidden('score', number_format($songData["score" ],2))}}
                        {{Form::hidden('duration', number_format($songData["duration" ],2))}}
                        {{Form::hidden('mfcc', number_format($songData["mfcc" ],2))}}
                        {{Form::hidden('tempo', number_format($songData["tempo" ],2))}}
                        {{Form::hidden('beats', number_format($songData["beats" ],2))}}
                        {{Form::hidden('loudness', number_format($songData["loudness" ],2))}}
                        {{Form::hidden('energy', number_format($songData["energy" ],2))}}

                    </div>
                    <div>
                        {{Form::submit('Add to my songs', ['class' => "btn btn-primary"])}}

                    </div>
                    {!! Form::close() !!}
                    <!--a href="/addMySongs"><button class = "btn btn-primary">Add to My Songs</button></a-->
                @endif
            </div>
        </div>

    </div>
@endsection