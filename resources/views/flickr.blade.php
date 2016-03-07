@extends('layouts.master')
@section('page-title', 'Genre')

@section('content')

    <div class="container">
            <h2>First 5 of {{$username}}'s public photos: </h2>
            @foreach ($photos as $photo)
                <img src="http://farm{{$photo["farm"]}}.staticflickr.com/{{$photo["server"]}}/{{$photo["id"]}}_{{$photo["secret"]}}.jpg">
                <br><br>
            @endforeach
    </div>

@endsection