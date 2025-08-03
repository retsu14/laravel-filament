<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointment;

class AppointmentController extends Controller
{
    // Handle POST /api/appointments
    public function __invoke(Request $request)
    {
        // Validate and store the appointment request
        // Example: $validated = $request->validate([...]);
        // Appointment::create($validated);
        // return response()->json(['message' => 'Appointment request submitted.']);
    }
} 