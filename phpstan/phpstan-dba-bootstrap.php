<?php

declare(strict_types=1);

use staabm\PHPStanDba\DbSchema\SchemaHasherMysql;
use staabm\PHPStanDba\QueryReflection\MysqliQueryReflector;
use staabm\PHPStanDba\QueryReflection\QueryReflection;
use staabm\PHPStanDba\QueryReflection\RecordingQueryReflector;
use staabm\PHPStanDba\QueryReflection\ReflectionCache;
use staabm\PHPStanDba\QueryReflection\ReplayAndRecordingQueryReflector;
use staabm\PHPStanDba\QueryReflection\RuntimeConfiguration;

require_once dirname(__DIR__) . '/vendor/autoload.php';

$cacheFile = dirname(__DIR__) . '/cache/.phpstan-dba.cache.php';

/** @var \Doctrine\DBAL\Connection $connection */
$connection = require dirname(__DIR__) . '/doctrine.php';

/** @var \mysqli $mysqli */
$mysqli = $connection->getNativeConnection();

// Does not work, cache has query with null result.
QueryReflection::setupReflector(
    new ReplayAndRecordingQueryReflector(
        ReflectionCache::create($cacheFile),
        new MysqliQueryReflector($mysqli),
        new SchemaHasherMysql($mysqli)
    ),
    new RuntimeConfiguration()
);

// Works fine, cache is fully generated.
// QueryReflection::setupReflector(
//     new RecordingQueryReflector(
//         ReflectionCache::create($cacheFile),
//         new MysqliQueryReflector($mysqli),
//     ),
//     new RuntimeConfiguration()
// );
