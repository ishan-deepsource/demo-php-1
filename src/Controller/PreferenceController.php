<?php

declare(strict_types=1);

namespace App\Controller;

final class PreferenceController
{
    public string $type = 'type';
    
    var $legacyProp = 'some value';

    private string $unused = '';

    final public function finalMethod(): string
    {
        return 'I am final!';
    }

    public function index(): void
    {
        $title = 'About us';
        $slug = 'about-us';
        
        $name = filter_var($_POST['name'], FILTER_SANITIZE_MAGIC_QUOTES);

        $array = [1, ,, 2, 3];

        return compact('title', 'slug', 'description');
    }
    
    public function get_settings(): void {}

    final public function index()
    {
        $name = filter_var($_POST['name'], FILTER_SANITIZE_MAGIC_QUOTES);
    }

    private function someRandomMethod()
    {

    }
}
