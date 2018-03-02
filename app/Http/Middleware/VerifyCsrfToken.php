<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *	排除检查路由 (CSRF 保护检查)
     * @var array
     */
    protected $except = [
        //
    ];
}
