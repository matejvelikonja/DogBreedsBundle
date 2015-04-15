<?php

namespace Velikonja\DogBreedsBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Velikonja\DogBreedsBundle\Repository\DogBreedRepository;

class DogBreedType extends AbstractType
{
    /**
     * @var DogBreedRepository
     */
    private $repository;

    /**
     * @param DogBreedRepository $repository
     */
    public function __construct(DogBreedRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(
            array(
                'choices'            => $this->getBreedChoices(),
                'translation_domain' => 'breeds',
            )
        );
    }

    /**
     * @return array
     */
    private function getBreedChoices()
    {
        $breeds  = $this->repository->findAll();
        $choices = array();

        foreach ($breeds as $id => $breed) {
            $choices[$id] = $id;
        }

        return $choices;
    }

    /**
     * @return string
     */
    public function getParent()
    {
        return 'choice';
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'dog_breeds';
    }
}