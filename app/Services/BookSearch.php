<?php

namespace App\Services;

class BookSearch {
    protected $books = [];

    public function __construct($books) {
        $this->books = $books;
    }

    public function find($searchTerm, $exactMatch = null) {
        $books = $this->books;
        if ($exactMatch == null || $exactMatch == false) {
            $results = [];
            foreach ($books as $book) {
                if (stripos($book['title'], $searchTerm) !== false) {
                    $results[] = $book;
                }
            }
            return $results;
        }
        else {
            foreach ($books as $book) {
                if (strcasecmp($searchTerm, $book['title']) == 0) {
                    $result = $book;
                    return $result;
                }
            }
        }
    }

}