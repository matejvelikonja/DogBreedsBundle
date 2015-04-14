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

    /**
     * Finds all objects in the repository.
     *
     * @return array
     */
    public function findAll()
    {
        $result = $this->reader->all();

        return $result;
    }

    /**
     * Finds an object by its primary key / identifier.
     *
     * @param string $id
     *
     * @return array
     */
    public function find($id)
    {
        return $this->reader->findById($id);
    }


    /**
     * Finds objects by a set of criteria.
     *
     * Optionally sorting and limiting details can be passed. An implementation may throw
     * an UnexpectedValueException if certain values of the sorting or limiting details are
     * not supported.
     *
     * @param array      $criteria
     * @param array|null $orderBy
     * @param int|null   $limit
     * @param int|null   $offset
     *
     * @return array
     */
    public function findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
    {

    }

    /**
     * Finds a single object by a set of criteria.
     *
     * @param array $criteria The criteria.
     *
     * @return object The object.
     */
    public function findOneBy(array $criteria)
    {

    }
}
