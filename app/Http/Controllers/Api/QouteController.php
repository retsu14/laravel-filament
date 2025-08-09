<?php

namespace App\Http\Controllers\Api;

use App\Models\Qoutes;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\RouteAttributes\Attributes\Prefix;

#[Prefix('api')]
class QouteController extends Controller
{
    // Handle POST /api/qoutes
    public function __invoke(Request $request)
    {
        // Validate and store the quote request
        // Example: $validated = $request->validate([...]);
        // Qoutes::create($validated);
        // return response()->json(['message' => 'Quote request submitted.']);
    }
} 