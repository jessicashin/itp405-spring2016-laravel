@extends('layouts.master')
@section('page-title', 'Genre')

@section('content')

<div class="container">
    <h1>DVDs in the "<?php echo $genre->genre_name ?>" genre:</h1>
    <table class="table table-striped">
        <tr>
            <th class="col-md-6"><h5>Title</h5></th>
            <th class="col-md-2"><h5>Rating</h5></th>
            <th class="col-md-2"><h5>Genre</h5></th>
            <th class="col-md-2"><h5>Label</h5></th>
        </tr>
        <?php foreach ($dvds as $d) { ?>
            <tr>
                <td><?php if ($d->title) { echo $d->title; } ?></td>
                <td><?php if ($d->rating) { echo $d->rating->rating_name; } ?></td>
                <td><?php if ($d->genre) { echo $d->genre->genre_name; } ?></td>
                <td><?php if ($d->label) { echo $d->label->label_name; } ?></td>
            </tr>
        <?php } ?>
    </table><br><br>
</div> <!-- /container -->

@endsection