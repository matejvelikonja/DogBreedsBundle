<?php

namespace Velikonja\DogBreedsBundle\Tests\Repository;


use Velikonja\DogBreedsBundle\Repository\DogBreedRepository;

class DogBreedRepositoryTest extends \PHPUnit_Framework_TestCase
{
    public function testFindAll()
    {
        $reader = $this->getMockBuilder('Velikonja\\DogBreedsBundle\\Reader')->getMock();

        $reader
            ->method('all')
            ->willReturn(array_fill(0, 10, 0));

        $repo   = new DogBreedRepository($reader);
        $result = $repo->findAll();

        $this->assertCount(10, $result);
    }
}
