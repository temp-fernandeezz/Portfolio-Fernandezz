<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class HomeSetting extends Settings
{
    public ?array $certificates;
    public ?array $skills;

    public ?string $about_me;

    public static function group(): string
    {
        return 'home';
    }
}
