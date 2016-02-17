@extends('layouts.master')
@section('page-title', 'Create')

@section('navbar')
    <li><a href="/dvds/search">Search</a></li>
    <li class="active"><a href="">Create</a></li>
    <li><a href="/dvds">DVDs</a></li>
@endsection


@section('content')

<div class="container">

    <div class="create-page-flags">
        <?php if (session('success')) : ?>
            <div class="flash-success">Your DVD was successfully added.</div><br>
        <?php endif ?>

        <?php if (count($errors) > 0) : ?>
            <?php foreach ($errors->all() as $error) : ?>
                <div class="flash-error"><?php echo $error ?></div>
            <?php endforeach ?>
        <?php endif ?>
    </div>

    <form action="/dvds/create" method="post" class="form-search">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <h2 class="form-signin-heading">Add a new DVD</h2>
        <div class="form-group">
            <label for="dvd" class="sr-only">DVD title</label>
            <input type="text" class="form-control" id="dvd" name="dvd" placeholder="Enter the DVD title">
        </div>

        <div class="row">
            <div class="col-md-6"><label for="genre" class="select-label">Select a genre:</label></div>
            <div class="col-md-6"><label for="rating" class="select-label">Select a rating:</label></div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <select class="selectpicker picker" id="genre" name="genre">
                    <?php foreach ($genres as $genre) : ?>
                        <option value="<?php echo $genre->id ?>"><?php echo $genre->genre_name ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col-md-6">
                <select class="selectpicker picker" id="rating" name="rating">
                    <?php foreach ($ratings as $rating) : ?>
                        <option value="<?php echo $rating->id ?>"><?php echo $rating->rating_name ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6"><label for="label" class="select-label">Select a label:</label></div>
            <div class="col-md-6"><label for="sound" class="select-label">Select a sound:</label></div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <select class="selectpicker picker" id="label" name="label">
                    <?php foreach ($labels as $label) : ?>
                        <option value="<?php echo $label->id ?>"><?php echo $label->label_name ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col-md-6">
                <select class="selectpicker picker" id="sound" name="sound">
                    <?php foreach ($sounds as $sound) : ?>
                        <option value="<?php echo $sound->id ?>"><?php echo $sound->sound_name ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <label for="format" class="select-label">Select a format:</label>
                <select class="selectpicker picker" id="format" name="format">
                    <?php foreach ($formats as $format) : ?>
                        <option value="<?php echo $format->id ?>"><?php echo $format->format_name ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col-md-6 create-button">
                <button type="submit" class="btn btn-lg btn-primary btn-block">Create</button>
            </div>
        </div>

    </form>

</div> <!-- /container -->

@endsection