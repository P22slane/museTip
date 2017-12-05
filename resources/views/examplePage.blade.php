@extends('layouts.app')

@section('content')
    <div class="container ">
        <div class="contPanel mainText">
            <div class="">
                @if(count($songData)>0)

                    <h3 class="" style="text-align: center;"><b>File name:</b> {{$songData['file_name']}}</h3>
                    <h2 class="" style="text-align: center;">88%</h2>
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
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>

                        <tr>
                            <td><b>Duration</b></td>
                            <td>{{$songData['duration']}}</td>
                            <td>
                                In music, duration is an amount of time or a particular time interval: how long or short a note, phrase, section, or composition lasts
                            </td>
                        </tr>
                        <tr>
                            <td><b>Mfcc</b></td>
                            <td>{{$songData['mfcc']}}</td>
                            <td>
                                Mel-frequency cepstrum (MFC) is a representation of the short-term power spectrum of a sound, based on a linear cosine transform of a log power spectrum on a nonlinear mel scale of frequency
                            </td>
                        </tr>
                        <tr>
                            <td><b>Tempo</b></td>
                            <td>{{$songData['tempo']}}</td>
                            <td>
                                Tempo is usually measured in beats per minute (BPM)
                            </td>
                        </tr>
                        <tr>
                            <td><b>Beats</b></td>
                            <td>{{$songData['beats']}}</td>
                            <td>
                                The beat is often defined as the rhythm listeners would tap their toes to when listening to a piece of music
                            </td>
                        </tr>
                        <tr>
                            <td><b>Loudness</b></td>
                            <td>{{$songData['loudness']}}</td>
                            <td>
                                loudness is the subjective perception of sound pressure. More formally, it is defined as, "That attribute of auditory sensation in terms of which sounds can be ordered on a scale extending from quiet to loud."loudness is the subjective perception of sound pressure. More formally, it is defined as, "That attribute of auditory sensation in terms of which sounds can be ordered on a scale extending from quiet to loud."
                            </td>
                        </tr>
                        <tr>
                            <td><b>Energy</b></td>
                            <td>{{$songData['energy']}}</td>
                            <td>
                                text
                            </td>
                        </tr>


                        </tbody>
                    </table>

                @endif
            </div>
        </div>

    </div>
@endsection