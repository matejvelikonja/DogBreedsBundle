<?php

namespace Velikonja\DogBreedsBundle\Tests;


use Velikonja\DogBreedsBundle\Reader;

class ReaderTest extends \PHPUnit_Framework_TestCase
{
    public function testAll()
    {
        $reader = new Reader();
        $result = $reader->all();

        $this->assertCount(506, $result);
    }

    public function testFindById()
    {
        $reader = new Reader();
        $result = $reader->findById('labrador-retriever');

        $this->assertNotNull($result);
    }
}
