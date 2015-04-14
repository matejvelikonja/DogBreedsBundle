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

    public function all()
    {
        return $this->data;
    }
}