<?php

namespace Alura\Doctrine\Helper;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Tools\Setup;

class EntityManagerCreator
{
    public function criaEntityManager(): EntityManagerInterface
    {
        $config = Setup::createXMLMetadataConfiguration(
            [__DIR__ . '/../../mapeamentos']
        );
        $con = [
            'driver' => 'pdo_pgsql',
            'host' => 'db',
            'dbname' => 'ead_php_alura_doctrine-heranca',
            'user' => 'root',
            'password' => '123',
        ];

        return EntityManager::create($con, $config);
    }
}
