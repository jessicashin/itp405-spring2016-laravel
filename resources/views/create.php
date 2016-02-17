<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>DVD Pages</title>

    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.9.4/css/bootstrap-select.min.css">

    <link href="/css/dvd.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <form action="/dvds/create" method="get" class="form-search">
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
                        <option value="<?php echo $genre->genre_name ?>"><?php echo $genre->genre_name ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col-md-6">
                <select class="selectpicker picker" id="rating" name="rating">
                    <?php foreach ($ratings as $rating) : ?>
                        <option value="<?php echo $rating->rating_name ?>"><?php echo $rating->rating_name ?></option>
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
                        <option value="<?php echo $label->label_name ?>"><?php echo $label->label_name ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col-md-6">
                <select class="selectpicker picker" id="sound" name="sound">
                    <?php foreach ($sounds as $sound) : ?>
                        <option value="<?php echo $sound->sound_name ?>"><?php echo $sound->sound_name ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>

<!--        <div class="row">-->
<!--            <div class="col-md-6"><label for="format" class="select-label">Select a format:</label></div>-->
<!--        </div>-->
<!--        <div class="row">-->
<!--            <div class="col-md-6">-->
<!--                <select class="selectpicker picker" id="format" name="format">-->
<!--                    --><?php //foreach ($formats as $format) : ?>
<!--                        <option value="--><?php //echo $format->format_name ?><!--">--><?php //echo $format->format_name ?><!--</option>-->
<!--                    --><?php //endforeach; ?>
<!--                </select>-->
<!--            </div>-->
<!--            <div class="col-md-6">-->
<!--                <button type="submit" class="btn btn-lg btn-primary btn-block">Create</button>-->
<!--            </div>-->
<!--        </div>-->

        <div class="row">
            <div class="col-md-6">
                <label for="format" class="select-label">Select a format:</label>
                <select class="selectpicker picker" id="format" name="format">
                    <?php foreach ($formats as $format) : ?>
                        <option value="<?php echo $format->format_name ?>"><?php echo $format->format_name ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col-md-6 create-button">
                <button type="submit" class="btn btn-lg btn-primary btn-block">Create</button>
            </div>
        </div>


    </form>

</div> <!-- /container -->

<footer class="footer">
    <div class="footer-container">
        <p class="text-muted">
            <span class="footer-text">ITP-405</span>
            <span class="footer-text">February 16 2016</span>
            <span class="footer-text">Jessica Shin</span>
            <span class="footer-text">Assignment 5: DVD Pages with Eloquent</span>
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