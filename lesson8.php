<?php

class User
{
    private(set) string $email {
        get => $this->email;
    }

    public function __construct(string $email)
    {
        $this->email = $email;
    }

    public function setEmail($value): void
    {
        if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidArgumentException('Invalid email');
        }
        $this->email = $value;
    }
}

$user = new User('hulkovskij@gmail.com');
$user->setEmail('dsasada@gmail.com');

echo $user->email;