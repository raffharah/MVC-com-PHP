<?php

use Alura\Cursos\Infra\EntityManagerCreator;
use Doctrine\ORM\Tools\Console\ConsoleRunner;

require_once __DIR__ . '/vendor/autoload.php';

$entityManager = (new EntityManagerCreator())->getEntityManager();

return ConsoleRunner::createHelperSet($entityManager);
