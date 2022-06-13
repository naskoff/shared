<?php

namespace Shared\Message;

use Symfony\Component\Uid\Uuid;

class ConsumerAdded
{

    public function __construct(
        private readonly int $id,
        private readonly Uuid $reference,
        private readonly string $username,
    ) {
    }

    /**
     * @return int
     */
    public function getId(): int
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

    /**
     * @return Uuid
     */
    public function getReference(): Uuid
    {
        return $this->reference;
    }
}