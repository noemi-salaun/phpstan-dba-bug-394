<?php

return \Doctrine\DBAL\DriverManager::getConnection(
    [
        'dbname'   => 'db',
        'user'     => 'root',
        'password' => 'root',
        'host'     => '127.0.0.1',
        'driver'   => 'mysqli',
    ]
);

