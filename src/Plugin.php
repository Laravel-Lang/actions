<?php

declare(strict_types=1);

/*
 * 🦋 The code style has been fixed
 */

namespace LaravelLang\Actions;

use LaravelLang\Actions\Plugins\Main;
use LaravelLang\Publisher\Plugins\Provider;

class Plugin extends Provider
{
    protected ?string $package_name = 'laravel-lang/actions';

    protected string $base_path = __DIR__.'/../';

    protected array $plugins = [
        Main::class,
    ];
}
