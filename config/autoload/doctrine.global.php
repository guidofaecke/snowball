<?php

declare(strict_types=1);

use Doctrine\DBAL\Driver\PDOMySql\Driver as MysqlDriver;
use Doctrine\DBAL\Types\Type;
use Ramsey\Uuid\Doctrine\UuidType;

if (! Type::hasType(UuidType::NAME)) {
    Type::addType(UuidType::NAME, UuidType::class);
}

return [
    'doctrine' => [
        'connection' => [
            'orm_default' => [
                'driverClass' => MysqlDriver::class,
                'params' => [
                    'driverClass' => MysqlDriver::class,
                    'host'             => 'mariadb',
                    'dbname'           => 'dbname',
                    'user'             => 'dbuser',
                    'password'         => '654321',
                ],
            ],
        ],
        'types' => [
            UuidType::NAME => UuidType::class,
        ],
    ],
];
