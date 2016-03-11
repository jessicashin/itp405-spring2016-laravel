<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SearchResultsTest extends TestCase
{
    public function testSearchResultsPage()
    {
        $this
            ->visit('/dvds/search')
            ->type('love', 'dvd')
            ->select('Comedy', 'genre')
            ->press('Search')
            ->seePageIs('/dvds?dvd=love&genre=Comedy&rating=');
    }
}
