@extends('layouts.master')
@section('page-title', 'Reviews')

@section('navbar')
    <li><a href="/dvds/search">Search</a></li>
    <li><a href="/dvds/create">Create</a></li>
    <li><a href="/dvds">DVDs</a></li>
@endsection


@section('content')

<div class="container reviews-page">

    <div class="info-box">
        <h2 style="margin-top: 0px;"><?php echo $movie->title ?></h2>
        <h4 class="text-muted">
            <span class="details"><b>Rating:</b> <?php echo $movie->rating_name ?></span>
            <span class="details"><b>Genre:</b> <?php echo $movie->genre_name ?></span>
        </h4>
        <h5 class="text-muted">
            <span class="details"><b>Label:</b> <?php echo $movie->label_name ?></span>
            <span class="details"><b>Sound:</b> <?php echo $movie->sound_name ?></span>
            <span class="details"><b>Format:</b> <?php echo $movie->format_name ?></span>
        </h5>
    </div><hr>


    <?php if (session('success')) : ?>
        <div class="flash-success">Your review was successfully added.</div><br>
    <?php endif ?>

    <?php if (count($errors) > 0) : ?>
        <?php foreach ($errors->all() as $error) : ?>
            <div class="flash-error"><?php echo $error ?></div>
        <?php endforeach ?>
        <br>
    <?php endif ?>

    <form action="/dvds/<?php echo $movie->id ?>" method="post">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <div class="form-group">
            <label for="rating" class="text-muted" style="font-size: large">Rate this DVD on a scale of 1-10: &nbsp; </label>
            <select class="selectpicker rating-picker" id="rating" name="rating">
                <?php
                for ($x = 10; $x >= 1; $x--) {
                    if (old('rating') == $x) { ?>
                        <option value="<?php echo $x ?>" selected><?php echo $x ?></option>
                    <?php
                    } else { ?>
                        <option value="<?php echo $x ?>"><?php echo $x ?></option>
                    <?php
                    }
                } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="title" class="sr-only">Title for your review:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Title for your review" value="<?php echo old('title') ?>">
        </div>
        <div class="form-group">
            <label for="description" class="sr-only">Your review:</label>
            <textarea id="description" name="description" class="form-control text-area" rows="10" placeholder="Write your review here."><?php echo old('description') ?></textarea>
        </div>
        <input type="hidden" name="dvd_id" value="<?php echo $movie->id ?>">
        <button type="submit" class="btn btn-lg btn-primary btn-block">Submit your review for this DVD</button>
    </form>

    <h2 style="margin-top: 80px">All Reviews for this DVD:</h2>
    <?php if (!$reviews) { ?>
        <p class="text-muted" style="font-size: 16px">No reviews yet. Be the first to review this DVD!</p>
    <?php } else foreach ($reviews as $r) { ?>
        <div class="review-box">
            <h3 style="margin-top: 0px;"><?php echo $r->rating ?>/10 - <?php echo $r->title ?></h3>
            <p><?php echo $r->description ?></p>
        </div>
    <?php } ?>

</div><!-- /container -->

<br><br>

@endsection