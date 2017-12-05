@extends('layouts.app')

@section('content')
    @if (Auth::guest())
        <script type="text/javascript">
            window.location = "{{ url('/login') }}";//here double curly bracket
        </script>
    @else
        <div class="container">
            <div class="contPanel">
                <div class="mainText">
                    <h3>My Songs</h3>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>File name</th>
                            <th>Duration</th>
                            <th>MFcc</th>
                            <th>Tempo</th>
                            <th>Beats</th>
                            <th>Loudness</th>
                            <th>Energy</th>
                            <th>Class</th>
                            <!--th>Vote</th>
                            <th></th-->
                        </tr>
                        </thead>
                        <tbody>
                        @if(count($mySongs)>0)
                            @foreach($mySongs as $song)
                                <tr>

                                    <td>{{$song->file_name}}</td>
                                    <td>{{$song->duration}}</td>
                                    <td>{{$song->mfcc}}</td>
                                    <td>{{$song->tempo}}</td>
                                    <td>{{$song->beats}}</td>
                                    <td>{{$song->loudness}}</td>
                                    <td>{{$song->energy}}</td>
                                    <td>{{$song->class}}</td>


                            @endforeach
                        @endif

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    @endif
@endsection
