@extends('layouts.master')
@section('page-title', 'Search Results')

@section('content')

<div class="container">
    <?php
    if (!$searchTerm && !$genre && !$rating) { ?>
        <h2>Showing all DVDs:</h2>
    <?php } else if (!$searchTerm) { ?>
        <h2>Showing DVDs with
        <?php
            if ($genre) { echo 'genre "'.$genre.'"'; }
            if ($genre && $rating) { echo ' and '; }
            if ($rating) { echo 'rating "'.$rating.'"'; }
        ?>:</h2>
    <?php } else { ?>
        <h2>You searched for "<?php echo $searchTerm ?>"
        <?php
            if ($genre || $rating) { echo ' with '; }
            if ($genre) { echo 'genre "'.$genre.'"'; }
            if ($genre && $rating) { echo ' and '; }
            if ($rating) { echo 'rating "'.$rating.'"'; }
        ?>:</h2>
    <?php } ?>

    <?php if ($dvds) { ?>
        <table class="table table-striped">
            <tr>
                <th class="col-md-6"><h5>Title</h5></th>
                <th class="col-md-1"><h5>Rating</h5></th>
                <th class="col-md-1"><h5>Genre</h5></th>
                <th class="col-md-1"><h5>Label</h5></th>
                <th class="col-md-1"><h5>Sound</h5></th>
                <th class="col-md-1"><h5>Format</h5></th>
                <th class="col-md-1"><h5>Reviews</h5></th>
            </tr>
            <?php foreach ($dvds as $d) : ?>
                <tr>
                    <td><?php echo $d->title ?></td>
                    <td><?php echo $d->rating_name ?></td>
                    <td><?php echo $d->genre_name ?></td>
                    <td><?php echo $d->label_name ?></td>
                    <td><?php echo $d->sound_name ?></td>
                    <td><?php echo $d->format_name ?></td>
                    <td><a href="/dvds/<?php echo $d->id ?>">Review</a></td>
                </tr>
            <?php endforeach; ?>
        </table><br><br>
    <?php } else { ?>
        <br>
        <h4>Sorry, nothing was found matching your criteria!</h4>
    <?php } ?>

</div><!-- /container -->

@endsection