<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Jenis;
use App\Supplier;

class FormBarangServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('barang.form', function($view) {
            $view->with('list_jenis', Jenis::pluck('namajenis', 'idjenis'));
            $view->with('list_supp', Supplier::pluck('namasupplier', 'idsupplier'));
        });

        view()->composer('barang.form_pencarian', function($view) {
            $view->with('list_jenis', Jenis::pluck('namajenis', 'idjenis'));
        });
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
