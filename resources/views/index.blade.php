@extends('layouts.master')
<title>DVD Pages</title>
<link href="/css/index.css" rel="stylesheet">

@section('content')

<div class="container">
    <section id="portfolio" style="margin-left: -10px">
        <div class="container">
            <div class="row" style="margin-top: 40px">
                <div class="col-sm-4 portfolio-item">
                    <a href="/dvds/search">
                        <div class="portfolio-box">
                            <span class="portfolio-box-title">/dvds/search</span><br>
                            <span class="portfolio-box-content">Search for a DVD and use sidebar to access Genre pages at /genres/{id}/dvds</span>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="/dvds">
                        <div class="portfolio-box">
                            <span class="portfolio-box-title">/dvds</span><br>
                            <span class="portfolio-box-content">List all DVDs and their details and use 'Review' link to access /dvds/{id}</span>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="/dvds/create">
                        <div class="portfolio-box">
                            <span class="portfolio-box-title">/dvds/create</span><br>
                            <span class="portfolio-box-content">Add a new DVD to the database <span style="font-size: 16px">(also possible via API by POST at /api/v1/dvds)</span></span>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <div class="portfolio-box">
                        <div class="non-link">
                            <span class="portfolio-box-title">/dvds/{id}</span><br>
                            <span style="font-size: 16px;">View a single DVD and its details, and add a review for the DVD</span>
                        </div>
                        <p style="font-size:10px;color:#a5a5a5;">Note: {id} must be a valid dvd id. Navigate here by clicking "Review" on the search results from <a href="/dvds/search">/dvds/search</a> or <a href="/dvds">/dvds</a></p>
                    </div>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <div class="portfolio-box">
                        <div class="non-link">
                            <span class="portfolio-box-title">/genres/{id}/dvds</span><br>
                            <span style="font-size: 18px;">List all DVDs in a single Genre</span>
                        </div>
                        <p style="font-size:12px;color:#a5a5a5;">Note: {id} must be a valid dvd id. Navigate here by clicking a genre from the sidebar on <a href="/dvds/search">/dvds/search</a></p>
                    </div>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="/api/v1/genres">
                        <div class="portfolio-box api">
                            <span class="portfolio-box-title">/api/v1/genres</span><br>
                            <span class="portfolio-box-content">GET: List all genres (JSON)</span>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                        <div class="portfolio-box api">
                            <div class="non-link">
                                <span class="portfolio-box-title">/api/v1/genres/{id}</span><br>
                                <span class="portfolio-box-content">GET: Single genre (JSON)</span>
                            </div>
                        </div>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="/api/v1/dvds">
                        <div class="portfolio-box api">
                            <span class="portfolio-box-title">/api/v1/dvds</span><br>
                            <span class="portfolio-box-content">GET: List first 20 DVDs with specific details, related records sideloaded (JSON)</span>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <div class="portfolio-box api">
                        <div class="non-link">
                            <span class="portfolio-box-title">/api/v1/dvds/{id}</span><br>
                            <span class="portfolio-box-content">GET: Single DVD with specific details, related records sideloaded (JSON)</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <div class="portfolio-box api">
                        <div class="non-link">
                            <span class="portfolio-box-title">/api/v1/dvds</span><br>
                            <span class="portfolio-box-content">POST: Add a dvd to database with a REST client (JSON)</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="/temp-api">
                        <div class="portfolio-box">
                            <span class="portfolio-box-title">/temp-api</span><br>
                            <span class="portfolio-box-content">Working with an API</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <br>
</div> <!-- /container -->

@endsection