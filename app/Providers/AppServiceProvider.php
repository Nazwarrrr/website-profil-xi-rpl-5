<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (isset($_ENV['VERCEL']) || isset($_SERVER['VERCEL'])) {
            config([
                'logging.default' => 'stderr',
                'logging.channels.stderr' => [
                    'driver' => 'errorlog',
                    'level' => 'debug',
                ],
            ]);
        }
    }
}
