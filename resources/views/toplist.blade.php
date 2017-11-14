@extends('layouts.app')

@section('content')
    @if (Auth::guest())
        <script type="text/javascript">
            window.location = "{{ url('/login') }}";//here double curly bracket
        </script>
    @else
    <div class="container contPanel mainText">
        <!--div>
        <h3>Hit Checker!</h3>
        {!! Form::open(['url' => '#']) !!}
        <div class="form-group">
            {{Form::label('song_name', '')}}
            {{Form::text('song_name', '',['class' => "form-control"])}}
        </div>
        <div>
            {{Form::submit('Check', ['class' => "btn btn-primary"])}}

        </div>
        {!! Form::close() !!}
                </div-->

        <div class="contPanel">
            <div class="mainText">
                <h3>Hit Checker!</h3>
                <form action="/store" enctype="multipart/form-data" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="file" name="song">
                    <br>
                    <input type="submit" class = "btn btn-primary" value="Check">
                </form>
            </div>
        </div>


    </div>
    <div class="container">
        <div class="contPanel">
            <div class="mainText">
                <h3>New hits!</h3>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Song name</th>
                        <th>Author</th>
                        <th>Length</th>
                        <th>Vote</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(count($music)>0)
                        @foreach($music as $song)
                            <tr>
                                <td>{{$song->song_name}}</td>
                                <td>{{$song->artist}}</td>
                                <td>{{$song->length}}</td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-sm">
                                        <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span></button>
                                    <button type="button" class="btn btn-primary btn-sm">
                                        <span class="glyphicon glyphicon-thumbs-down" aria-hidden="true"></span></button>
                                </td>
                                <td><a href="{{url('/playlist/add/'.$song->id)}}"><button class="btn btn-primary btn-sm" type="submit">Add List</button></a></td>
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
