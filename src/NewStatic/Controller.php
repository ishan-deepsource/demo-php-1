<?php

namespace App\NewStatic;

class Controller
{
    public array $pref = [];

    public array $pref = [];

    public function __construct(string $name)
    {
        //
    }

    public function getController(): self
    {
        return new static('Base'); //
    }

    private function unusedPrivatemet(): void
    {
    }
}
