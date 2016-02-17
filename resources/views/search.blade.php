@extends('layouts.master')
@section('page-title', 'Search')

@section('navbar')
    <li class="active"><a href="">Search</a></li>
    <li><a href="/dvds/create">Create</a></li>
    <li><a href="/dvds">DVDs</a></li>
@endsection


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10">
            <form action="/dvds" method="get" class="form-search">
                <h2 class="form-signin-heading">Search for a DVD</h2>
                <div class="form-group">
                    <label for="dvd" class="sr-only">DVD title</label>
                    <input type="text" class="form-control" id="dvd" name="dvd" placeholder="DVD title">
                </div>
                <div class="row">
                    <div class="col-md-6"><label for="genre" class="select-label">Select a genre:</label></div>
                    <div class="col-md-6"><label for="rating" class="select-label">Select a rating:</label></div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <select class="selectpicker picker" id="genre" name="genre">
                            <option value="">All genres</option>
                            <?php foreach ($genres as $genre) : ?>
                                <option value="<?php echo $genre->genre_name ?>"><?php echo $genre->genre_name ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <select class="selectpicker picker" id="rating" name="rating">
                            <option value="">All ratings</option>
                            <?php foreach ($ratings as $rating) : ?>
                                <option value="<?php echo $rating->rating_name ?>"><?php echo $rating->rating_name ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-lg btn-primary btn-block">Search</button>
            </form>
        </div>
        <div class="col-md-2 sidebar-right">
            <h4>Genre Pages</h4>
            <?php foreach ($genres as $genre) : ?>
                <p class="genre-list"><a href="<?php echo '/genres/'.$genre->id.'/dvds' ?>"><?php echo $genre->genre_name ?></a></p>
            <?php endforeach; ?>
        </div>
    </div>
</div> <!-- /container -->

@endsection