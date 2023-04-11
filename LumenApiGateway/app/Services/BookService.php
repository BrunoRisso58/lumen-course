<?php

namespace App\Services;
use App\Traits\ConsumesExternalServices;

class BookService
{
    use ConsumesExternalServices;

    /**
     * The base uri to consume the books service
     * @var string
     */
    public $baseUri;

    public function __construct()
    {
        $this->baseUri = config('services.books.base_uri');
    }

    /**
     * Obtain the full list of book from the book service
     * @return string
     */
    public function obtainBooks()
    {
        return $this->performRequest('GET', '/books');
    }

    /**
     * Create one book using the book service
     * @return string
     */
    public function createBook($data)
    {
        return $this->performRequest('POST', '/books', $data);
    }

    /**
     * Update one book using the book service
     * @return string
     */
    public function editBook($data, $book)
    {
        return $this->performRequest('PUT', "/books/$book", $data);
    }

    /**
     * Show one specific book using the book service
     * @return string
     */
    public function obtainBook($book)
    {
        return $this->performRequest('GET', "/books/$book");
    }

    /**
     *Delete one book using the book service
     * @return string
     */
    public function deleteBook($book)
    {
        return $this->performRequest('DELETE', "/books/$book");
    }
}