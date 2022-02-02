@extends('layouts.base')

@section('pageTitle')
    DC comics
@endsection

@section('pageContent')
    <div class="main">
        <div class="jumbo"></div>
        <div class="container current-series">
            <h2 class="label">Current series</h2>
            <div class="box">
                @foreach ($comics as $comic)
                    <div class="card">
                        <div class="img">
                            <img src="{{$comic["thumb"]}}" alt="{{$comic["type"]}}">
                        </div>
                        <div class="title">{{$comic["series"]}}</div>
                    </div>
                @endforeach
                <button><a href="#">Load more</a></button>
            </div>
        </div>
    </div>
@endsection