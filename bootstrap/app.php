<?php

use App\Http\Middleware\CheckRoleMiddleware;
use App\Http\Middleware\TestMiddleware;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'checkRole' => CheckRoleMiddleware::class,
        ]);

        // Add Middleware Globally
        // $middleware->append(TestMiddleware::class);
        // $middleware->append(CheckRoleMiddleware::class);

        // Middleware Group
        // $middleware->appendToGroup('test-middleware-group', [
        //     TestMiddleware::class,
        //     CheckRoleMiddleware::class,
        // ]);


        // Append Middlewares to default Web Middleware already created by Laravel and automatically applied to the web routes by default
        // $middleware->web(append: [
        //     TestMiddleware::class,
        //     CheckRoleMiddleware::class,
        // ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
