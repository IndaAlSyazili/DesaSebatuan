<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\VisitorStat;

class VisitorLogger
{
    public function handle(Request $request, Closure $next)
    {
        VisitorStat::create([
            'ip_address' => $request->ip(),
            'user_agent' => $request->header('User-Agent'),
            'page_visited' => $request->path(), // Perbaikan di sini
        ]);

        return $next($request);
    }
}