<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>DVD Search</title>

    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.9.4/css/bootstrap-select.min.css">

    <link href="/css/search.css" rel="stylesheet">
</head>
<body>

<div class="container reviews-page">
    <h4><a href="/dvds/search"><span class="glyphicon glyphicon-chevron-left"></span>Back to Search</a></h4>
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
            <textarea id="description" name="description" class="form-control" rows="10" placeholder="Write your review here."><?php echo old('description') ?></textarea>
        </div>
        <input type="hidden" name="dvd_id" value="<?php echo $movie->id ?>">
        <button type="submit" class="btn btn-lg btn-primary btn-block">Submit your review for this DVD</button>
    </form>

    <h2 style="margin-top: 100px">All Reviews for this DVD:</h2>
    <?php if (!$reviews) { ?>
        <p class="text-muted" style="font-size: 16px">No reviews yet. Be the first to review this DVD!</p>
    <?php } else foreach ($reviews as $r) { ?>
        <div class="review-box">
            <h3 style="margin-top: 0px;"><?php echo $r->rating ?>/10 - <?php echo $r->title ?></h3>
            <p><?php echo $r->description ?></p>
        </div>
    <?php } ?>
</div>

<br><br>

<footer class="footer">
    <div class="footer-container">
        <p class="text-muted">
            <span class="footer-text">ITP-405</span>
            <span class="footer-text">February 9 2016</span>
            <span class="footer-text">Jessica Shin</span>
            <span class="footer-text">Assignment 4: DVD Reviews Page with Laravel</span>
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