<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('home.about_me', null);

        $this->migrator->add('home.skills', []);
        $this->migrator->add('home.certificates', []);
    }
};
