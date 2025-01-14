<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\RedirectIfAuthenticated;
use App\Http\Middleware\RoleMiddleware;
return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',

        commands: __DIR__.'/../routes/console.php',
        health: '/up',
        then: function () {
            Route::middleware(['web', 'auth', 'role:admin'])
                ->prefix('admin')
                ->as('admin.')
                ->group(base_path('routes/admin.php'));

            Route::middleware(['web', 'auth', 'role:vendor'])
                ->prefix('vendor')
                ->as('vendor.')
                ->group(base_path('routes/vendor.php'));

        },
    )
    ->withMiddleware(function (Middleware $middleware) {

        $middleware->append(RedirectIfAuthenticated::class);
       
            $middleware->alias([
                'role' =>     RoleMiddleware::class
            ]);
       
     
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();