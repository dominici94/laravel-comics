@extends('layouts.base')

@section('pageTitle')
    Chi siamo
@endsection

@section('pageContent')
<h1>chi siamo</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias repellendus consectetur provident exercitationem ducimus eligendi voluptates nulla labore praesentium quaerat. Vero quam nihil minus harum, provident non vel reprehenderit aperiam.</p>
<ul>
    @dump($team)
    @foreach ($team as $item)
            <li>
                {{$item["title"]}} {{$item["price"]}}
                <ul>
                @foreach ($item["artists"] as $artist)
                    <li>{{$artist}}</li>
                @endforeach
                </ul>
            </li>
    @endforeach
</ul>
@endsection