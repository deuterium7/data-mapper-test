<?php

namespace AlexanderZabornyi\DataMapperTest;

class StorageAdapter
{
    private $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * Поиск по id среди данных адаптера
     *
     * @param $id
     *
     * @return mixed|null
     */
    public function find($id)
    {
        if (isset($this->data[$id])) {
            return $this->data[$id];
        }

        return null;
    }
}