<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
        // new
        $this->app->bind('path.public', function () {
            return base_path() . '/public_html';
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        config(['app.locale' => 'id']);
        Carbon::setLocale('id');
        Blade::directive('currency', function ($expression) {
            return "Rp. <?php echo number_format($expression,0,',','.'); ?>";
        });
    }
}
