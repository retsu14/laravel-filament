<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Qoutes;

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