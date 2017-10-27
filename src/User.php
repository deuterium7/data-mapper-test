<?php

namespace AlexanderZabornyi\DataMapperTest;

class User
{
    private $email;
    private $username;

    public function __construct(string $username, string $email)
    {
        $this->username = $username;
        $this->email = $email;
    }

    /**
     * Вызываем конструктор
     *
     * @param array $state
     *
     * @return User
     */
    public static function fromState(array $state): User
    {
        return new self(
            $state['username'],
            $state['email']
        );
    }

    /**
     * Получить имя пользователя
     *
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * Получить email пользователя
     *
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

}