@extends('layouts.base')

@section('pageTitle')
Home
@endsection

@section('pageContent')

<div class="container">
    <a href="#" class="top">current series</a>    
    <div class="comics-list">

        @foreach ($comics as $comic)
            <div class="comic-card">
                <img src="{{$comic["thumb"]}}" alt="{{$comic["series"]}}">
                <h3>{{$comic["series"]}}</h3>
            </div>
        @endforeach
        
    </div>
    <a href="#" class="down">load more</a>
</div>

@endsection