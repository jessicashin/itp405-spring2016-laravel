<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class BookSearchTest extends TestCase
{
    protected $books = [
        [ 'title' => 'Introduction to HTML and CSS', 'pages' => 432 ],
        [ 'title' => 'Learning JavaScript Design Patterns', 'pages' => 32 ],
        [ 'title' => 'Object Oriented JavaScript', 'pages' => 42 ],
        [ 'title' => 'JavaScript Web Applications', 'pages' => 99 ],
        [ 'title' => 'PHP Object Oriented Solutions', 'pages' => 80 ],
        [ 'title' => 'PHP Design Patterns', 'pages' => 300 ],
        [ 'title' => 'Head First Java', 'pages' => 200 ]
    ];

    public function testFindBooks() {
        $search = new \App\Services\BookSearch($this->books);
        $results = $search->find('javascript');
        $this->assertEquals($results, [
            [ 'title' => 'Learning JavaScript Design Patterns', 'pages' => 32 ],
            [ 'title' => 'Object Oriented JavaScript', 'pages' => 42 ],
            [ 'title' => 'JavaScript Web Applications', 'pages' => 99 ]
        ]);
    }

    public function testExactMatch() {
        $search = new \App\Services\BookSearch($this->books);
        $result = $search->find('javascript web applications', true);
        $this->assertEquals($result,
            ['title' => 'JavaScript Web Applications', 'pages' => 99 ]
        );
    }

    public function testNonexistentBook(){
        $search = new \App\Services\BookSearch($this->books);
        $result = $search->find('The Definitive Guide to Symfony', true);
        $this->assertNull($result);
    }
}
