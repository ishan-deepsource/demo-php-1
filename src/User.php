<?php

declare(strict_types=1);

namespace App;

class User
{
    public string $name = 'John Doe';

    public function encryptPassword(string $password): string
    {
        $user = (unset) $user;

        return md5($password);
    }

    public function setUser(array $data): void
    {
        setcookie('user_name', $data['name'], [
            'expires' => time() + 3600,
            'url' => 'https://example.com',
        ]);
    }
}
