<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>DVD Pages - @yield('page-title')</title>

    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.9.4/css/bootstrap-select.min.css">

    <link href="/css/dvd.css" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('/images/favicon.ico') }}">
</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/" style="margin-right: 5px;">Laravel DVD Pages</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="{{ Request::is('dvds/search') ? 'active' : '' }}"><a href="{{ Request::is('dvds/search') ? '#' : '/dvds/search' }}">Search</a></li>
                <li class="{{ Request::is('dvds/create') ? 'active' : '' }}"><a href="{{ Request::is('dvds/create') ? '#' : '/dvds/create' }}">Create</a></li>
                <li class="{{ Request::is('dvds') ? 'active' : '' }}"><a href="{{ Request::is('dvds') ? '#' : '/dvds' }}">List</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">DVD API <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/api/v1/genres">All genres</a></li>
                        <li><a href="/api/v1/genres/1">Single genre (first)</a></li>
                        <li><a href="/api/v1/dvds">First 20 DVDs</a></li>
                        <li><a href="/api/v1/dvds/1">Single DVD (first)</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="https://chrome.google.com/webstore/detail/advanced-rest-client/hgmloofddffdnphfgcellkdfbfbjeloo">Create a DVD (POST)</a></li>
                    </ul>
                </li>
                {{--<li class="{{ Request::is('flickr') ? 'active' : '' }}"><a href="{{ Request::is('flickr') ? '#' : '/flickr' }}">Flickr API</a></li>--}}
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="http://itpweb.herokuapp.com/courses/20161405">ITP-405</a></li>
                <li><a href="http://itpweb.herokuapp.com/assignments/api">Assignment 7</a></li>
                <li><a href="https://github.com/jessicashin/itp405-spring2016-laravel">Github Repo</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

@yield('content')

<footer class="footer">
    <div class="footer-container container text-center">
        <p class="text-muted">
            <span class="footer-text">1 March 2016</span>
            <span class="footer-text">Jessica Shin</span>
            <span class="footer-text">Assignment 7: Working with APIs</span>
        </p>
    </div>
</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha256-KXn5puMvxCw+dAYznun+drMdG1IFl3agK0p/pqT9KAo= sha512-2e8qq0ETcfWRI4HJBzQiA3UoyFk6tbNyG+qSaIBZLyW9Xf3sWZHN/lxe9fTh1U45DpPf07yj94KsUHHWe4Yk1A==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.9.4/js/bootstrap-select.min.js"></script>
</body>
</html>