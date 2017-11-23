@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="contPanel">
            <div class="mainText">
                @if(count($songData)>0)
                    <p>You got one</p>
                @endif

                <h3>{{$songData['name']}}</h3>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th style="width: 20%;"></th>
                        <th style="width: 10%;"></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>Harmonic</td>
                            <td>{{$songData['y_harmonic']}}</td>
                            <td>
                                <div class="progress">

                                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 50%; ">

                                        <span class="sr-only">50% Complete</span>

                                    </div>

                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Percussive</td>
                            <td>{{$songData['y_percussive']}}</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Tempo</td>
                            <td>{{$songData['tempo']}}</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Beats</td>
                            <td>{{$songData['beats']}}</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Loudness</td>
                            <td>{{$songData['loudness']}}</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Energy</td>
                            <td>{{$songData['energy']}}</td>
                            <td></td>
                        </tr>


                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection