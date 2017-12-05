@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="contPanel">
            <div class="mainText contCentre">
                <h3>Hit Checker!</h3>
                <form action="/store" enctype="multipart/form-data" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="file" name="song">
                    <br>
                    <input type="submit" class = "btn btn-primary" value="Check">
                </form>
            </div>
        </div>

        <div class="contPanel">
            <div class="mainText contCentre">
                <h3 style="text-align: center;">About Us</h3>

                <lorem></lorem>
                <a href="/examplePage" style="margin: 0 auto; " ><button class = "btn btn-primary" value="">Example</button></a>

            </div>
        </div>
    </div>




@endsection