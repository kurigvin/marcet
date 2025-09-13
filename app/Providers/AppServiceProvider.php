<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

// Импортируем модель и политику
use App\Models\Listing;
use App\Policies\ListingPolicy;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Связь моделей с их политиками
     */
    protected $policies = [
        Listing::class => ListingPolicy::class,
    ];

    /**
     * Зарегистрировать политики авторизации.
     */
    public function boot(): void
    {
        $this->registerPolicies();
    }
}
