<?php

namespace Velikonja\DogBreedsBundle;

use Symfony\Component\Yaml\Yaml;

class Reader
{
    /**
     * @var array
     */
    private $data;

    public function __construct()
    {
        $this->data = Yaml::parse(file_get_contents(__DIR__ . '/Resources/data/breeds.yml'));
    }

    /**
     * @return array
     */
    public function all()
    {
        return $this->data;
    }

    /**
     * @param string $id
     *
     * @return array
     */
    public function findById($id)
    {
        if (isset($this->data[$id])) {
            return $this->data[$id];
        }

        return null;
    }
}
