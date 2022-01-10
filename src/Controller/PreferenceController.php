<?php

declare(strict_types=1);

namespace App\Controller;

class PreferenceController
{
    public string $type = 'type';

    final public function finalMethod(): string
    {
        return 'I am final!';
    }

    public function index(): void
    {
        $title = 'About us';
        $slug = 'about-us';

        return compact('title', 'slug', 'description');
    }
}
