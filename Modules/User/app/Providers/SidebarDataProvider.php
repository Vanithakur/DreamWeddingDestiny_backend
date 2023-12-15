<?php

namespace Modules\User\app\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Service;


class SidebarDataProvider extends ServiceProvider
{
    function servicesInfo()
    {

        $services = Service::select('*')->get();
        return ($services);
    }

    /**
     * Register the service provider.
     */
    public function register(): void
    {
        //
    }

    /**
     * Get the services provided by the provider.
     */
    public function provides(): array
    {
        View::composer('*', function ($views) {
            $services = $this->servicesInfo();
            $views->with('servicesInfo', $services);
        });
        // return [];
    }

    public function boot()
    {
        View::composer('*', function ($views) {
            $services = $this->servicesInfo();
            $views->with('servicesInfo', $services);
        });
    }
}
