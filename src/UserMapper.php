<?php

namespace AlexanderZabornyi\DataMapperTest;

class UserMapper
{
    private $adapter;

    public function __construct(StorageAdapter $storage)
    {
        $this->adapter = $storage;
    }

    /**
     * Поиск пользователя по id
     *
     * @param int $id
     *
     * @return User
     */
    public function findById(int $id): User
    {
        $result = $this->adapter->find($id);

        if ($result === null) {
            throw new \InvalidArgumentException("User #id not found");
        }

        return $this->mapRowToUser($result);
    }

    /**
     * Вызываем конструктор пользователя
     *
     * @param array $row
     *
     * @return User
     */
    private function mapRowToUser(array $row): User
    {
        return User::fromState($row);
    }
}