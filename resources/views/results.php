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

<div class="container">
    <h4><a href="/dvds/search"><span class="glyphicon glyphicon-chevron-left"></span>Back to Search</a></h4>
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
</div>

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