@extends('layouts.master')
<title>DVD Pages</title>

@section('content')

<div class="container">
    <h2>Hello! Please select a page from the navigation bar above.</h2>
    <h3>Alternatively, select from this list of all existing pages:</h3>
    <ul>
        <li><a href="/dvds/search">/dvds/search</a></li>
        <li><a href="/dvds">/dvds</a></li>
        <li><a href="/dvds/create">/dvds/create</a></li>
        <li>/dvds/{id}
            <br>Note: {id} must be a valid dvd id. Navigate here by clicking "Review" on the search results from <a href="/dvds/search">/dvds/search</a> or from <a href="/dvds">/dvds</a>
        </li>
        <li>/genres/{id}/dvds
            <br>Note: {id} must be a valid genre id. Navigate here by clicking a genre from the sidebar on <a href="/dvds/search">/dvds/search</a>
        </li>
        <li><a href="/api/v1/genres">/api/v1/genres</a></li>
        <li>/api/v1/genres/{id}</li>
        <li><a href="/api/v1/dvds">/api/v1/dvds</a></li>
        <li>/api/v1/dvds/{id}</li>
    </ul>
</div> <!-- /container -->

@endsection