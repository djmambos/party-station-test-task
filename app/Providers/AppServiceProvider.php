<?php

namespace App\Providers;

use App\Library\TicketGateway\TicketGatewayApi;
use App\Library\TicketGateway\TicketGatewayApiAbstract;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(TicketGatewayApiAbstract::class, TicketGatewayApi::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
