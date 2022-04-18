<?php

declare(strict_types=1);

namespace App\Controller;

class PreferenceController
{
    public string $type = 'type';
    
    var $legacyProp = 'some value';

    final public function finalMethod(): string
    {
        return 'I am final!';
    }

    public function index(): void
    {
        $title = 'About us';
        $slug = 'about-us';
        
        $name = filter_var($_POST['name'], FILTER_SANITIZE_MAGIC_QUOTES);

        return compact('title', 'slug', 'description');
    }
    
    public function get_settings(): void {}
}
