<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Service;
class ServicesDataProvider extends ServiceProvider
{
    function servicesData()
    {

        $services = Service::select('*')->get();
        return ($services);
    }


    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('*', function ($views) {
            $services = $this->servicesData();
            $views->with('servicesData', $services);
        });
    }
}
