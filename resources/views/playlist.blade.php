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
                        @if(count($playlist)>0)
                            @foreach($playlist as $song)
                                <tr>

                                    <td>{{$song->song_name}}</td>
                                    <td>{{$song->artist}}</td>
                                    <td>{{$song->length}}</td>

                                    <!--td>
                                        <button type="button" class="btn btn-primary btn-sm">
                                            <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span></button>
                                        <button type="button" class="btn btn-primary btn-sm">
                                            <span class="glyphicon glyphicon-thumbs-down" aria-hidden="true"></span></button>
                                    </td>
                                    <td><a href="{{url('/playlist/add/'.$song->id)}}"><button class="btn btn-primary btn-sm" type="submit">Add List</button></a></td-->
                                </tr>
                            @endforeach
                        @endif

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    @endif
@endsection
