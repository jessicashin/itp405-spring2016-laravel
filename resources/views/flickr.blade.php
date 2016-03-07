@extends('layouts.master')
@section('page-title', 'Genre')

@section('content')

    @foreach ($photos as $photo) {
        <img src="http://farm{{$photo->farm}}.staticflickr.com/{{$photo->server}}/{{$photo->id}}_{{$photo->secret}}.jpg"><br>
    @endforeach

@endsection