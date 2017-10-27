<?php

namespace AlexanderZabornyi\DataMapperTest\Tests;

use AlexanderZabornyi\DataMapperTest\StorageAdapter;
use AlexanderZabornyi\DataMapperTest\User;
use AlexanderZabornyi\DataMapperTest\UserMapper;
use PHPUnit\Framework\TestCase;

class DataMapperTest extends TestCase
{
    public function testCanMapUserFromStorage()
    {
        $storage = new StorageAdapter([
            1 => ['username' => 'test', 'email' => 'test@gmail.com']
        ]);
        $mapper = new UserMapper($storage);

        $user = $mapper->findById(1);

        $this->assertInstanceOf(User::class, $user);
    }

    public function testWillNotMapInvalidData()
    {
        $storage = new StorageAdapter([]);
        $mapper = new UserMapper($storage);

        $mapper->findById(1);
    }
}