@extends('layouts.app')

@section('content')
    <div class="container ">
        <div class="contPanel mainText contCentre">
            <div class="">
                @if(count($songData)>0)

                    <h3 class="" style="text-align: center;"><b>File name: {{$fileName}}</b></h3>
                    <h2 class="" style="text-align: center;">{{$songData["score"]}}%</h2>
                    <!--div class="set-size charts-container">
                        <div class="pie-wrapper pie-wrapper--solid progress-88">
                            <span class="label">88<span class="smaller">%</span></span>
                        </div>
                    </div-->
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
                            <td>{{$songData["duration"]}}</td>
                            <!--td>
                                <div class="progress">

                                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 50%; ">

                                        <span class="sr-only">50% Complete</span>

                                    </div>

                                </div>
                            </td-->
                        </tr>
                        <tr>
                            <td><b>Mfcc</b></td>
                            <td>{{$songData["mfcc"]}}</td>

                            <!--td></td-->
                        </tr>
                        <tr>
                            <td><b>Tempo</b></td>
                            <td>{{$songData["tempo"]}}</td>

                            <!--td></td-->
                        </tr>
                        <tr>
                            <td><b>Beats</b></td>
                            <td>{{$songData["beats"]}}</td>

                            <!--td></td-->
                        </tr>
                        <tr>
                            <td><b>Loudness</b></td>
                            <td>{{$songData["loudness"]}}</td>

                            <!--td></td-->
                        </tr>
                        <tr>
                            <td><b>Energy</b></td>
                            <td>{{$songData["energy"]}}</td>
                            <!--td></td-->
                        </tr>


                    </tbody>
                </table>
                    <a href="/addSong"><button class = "btn btn-primary">Add to My Songs</button></a>
                @endif
            </div>
        </div>

    </div>
@endsection