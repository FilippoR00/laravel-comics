@extends('layouts.base')

@section('pageTitle')
    {{$comics["title"]}}
@endsection

@section('pageContent')
    <div class="main">
        <div class="jumbo"></div>
        <div class="container current-series">
            <h2 class="label">{{$comics["title"]}}</h2>
            <ul>
                <li>Description: {{$comics["description"]}}</li>
                <li>Price: {{$comics["price"]}}</li>
                <li>Series: {{$comics["series"]}}</li>
                <li>Date: {{$comics["sale_date"]}}</li>
                <li>Type: {{$comics["type"]}}</li>
                <li>Artists:
                    <ul>
                        @foreach ($comics["artists"] as $artist)
                            <li>{{$artist}}</li>
                        @endforeach
                    </ul>
                </li>
                <li>Writers:
                    <ul>
                        @foreach ($comics["writers"] as $writer)
                            <li>{{$writer}}</li>
                        @endforeach
                    </ul>
                </li>
            </ul>
        </div>
    </div>
@endsection