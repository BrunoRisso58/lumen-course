<?php

namespace App\Services;
use App\Traits\ConsumesExternalServices;

class AuthorService
{
    use ConsumesExternalServices;

    /**
     * The base uri to consume the authors service
     * @var string
     */
    public $baseUri;

    public function __construct()
    {
        $this->baseUri = config('services.authors.base_uri');
    }

    /**
     * Obtain the full list of author from the author service
     * @return string
     */
    public function obtainAuthors()
    {
        return $this->performRequest('GET', '/authors');
    }

    /**
     * Create one author using the author service
     * @return string
     */
    public function createAuthor($data)
    {
        return $this->performRequest('POST', '/authors', $data);
    }

    /**
     * Update one author using the author service
     * @return string
     */
    public function editAuthor($data, $author)
    {
        return $this->performRequest('PUT', "/authors/$author", $data);
    }

    /**
     * Show one specific author using the author service
     * @return string
     */
    public function obtainAuthor($author)
    {
        return $this->performRequest('GET', "/authors/$author");
    }

    /**
     *Delete one author using the author service
     * @return string
     */
    public function deleteAuthor($author)
    {
        return $this->performRequest('DELETE', "/authors/$author");
    }
}