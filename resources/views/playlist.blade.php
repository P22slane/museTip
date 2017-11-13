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
                    <h3>New hits!</h3>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Song name</th>
                            <th>Author</th>
                            <th>Length</th>
                            <!--th>Vote</th>
                            <th></th-->
                        </tr>
                        </thead>
                        <tbody>
                        @if(count($playlist)>0)
                            @foreach($playlist as $song)
                                <tr>
                                    <td>{{$song->musics_id}}</td>

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
