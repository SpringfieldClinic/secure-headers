<?php

namespace SpringfieldClinic\SecureHeaders;

use Illuminate\Support\ServiceProvider;

class SecureHeadersServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                $this->configPath() => config_path('secure-headers.php'),
            ], 'config');
        }
    }

    public function register(): void
    {
        $this->mergeConfigFrom($this->configPath(), 'secure-headers');
    }

    protected function configPath(): string
    {
        return __DIR__ . '/../config/secure-headers.php';
    }
}
