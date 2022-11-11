<?php
declare(strict_types=1);

namespace Noemi\BugRepo;

use Doctrine\DBAL\Connection;

final class Foo
{
    private Connection $connection;

    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }

    /**
     * @return array{id: int, name: string, request1: string}
     */
    public function fetch1(int $id): array
    {
        $data = $this->connection->fetchAssociative("SELECT id, name, 'request1' FROM my_table WHERE id = ?", [$id]);
        if (!$data) {
            throw new \RuntimeException('Data not found');
        }

        // \PHPStan\dumpType($data);

        return $data;
    }

    /**
     * @return array{id: int, name: string, request2: string}
     */
    public function fetch2(int $id): array
    {
        $data = $this->connection->fetchAssociative("SELECT id, name, 'request2' FROM my_table WHERE id = ?", [$id]);
        if (!$data) {
            throw new \RuntimeException('Data not found');
        }

        // \PHPStan\dumpType($data);

        return $data;
    }
}
