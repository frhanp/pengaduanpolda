<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Event; // Tambahkan ini
use App\Events\StatusDiubah;         // Tambahkan ini
use App\Listeners\KirimNotifikasiStatus; // Tambahkan ini

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
        Event::listen(
            StatusDiubah::class,
            KirimNotifikasiStatus::class
        );
    }
}
