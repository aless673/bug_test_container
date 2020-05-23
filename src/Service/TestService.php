<?php

namespace App\Service;

use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\OneToOne;
use Doctrine\ORM\UnitOfWork;
use Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor;
use Symfony\Component\PropertyAccess\PropertyAccess;
use Symfony\Component\PropertyInfo\Type;

class TestService
{
    public function __construct(EntityManagerInterface $entityManager)
    {
    }

    public function test()
    {
        codecept_debug('TestService object id : ' . spl_object_id($this));
    }
}
