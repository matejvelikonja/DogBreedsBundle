<?php

namespace Velikonja\DogBreedsBundle\Repository;

use Velikonja\DogBreedsBundle\Reader;

class DogBreedRepository
{
    /**
     * @var Reader
     */
    private $reader;

    public function __construct(Reader $reader)
    {
        $this->reader = $reader;
    }


    public function findAll()
    {
        $result = $this->reader->all();

        return $result;
    }
}