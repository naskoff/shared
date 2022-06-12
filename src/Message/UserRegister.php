<?php

namespace Shared\Message;

final class UserRegister
{

    public function __construct(
        private readonly string $id,
        private readonly string $username
    ) {
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }
}