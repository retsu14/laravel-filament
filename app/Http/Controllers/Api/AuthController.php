<?php

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\RouteAttributes\Attributes\Post;
use Spatie\RouteAttributes\Attributes\Prefix;
use Spatie\RouteAttributes\Attributes\Middleware;


#[Prefix('api')]
#[Middleware('auth:sanctum')]

class AuthSyncController extends Controller
{
    #[Post('sync-user')]
    public function store(Request $request)
    {
        $validated = $request->validate([
            'email'  => 'required|email',
            'name'   => 'nullable|string',
        ]);

        $user = User::updateOrCreate(   
            ['email' => $validated['email']],
            [
                'name' => $validated['name'] ?? '',
                'password' => bcrypt(Str::random(16)), 
            ]
        );

         $token = $user->createToken('nextjs-auth')->plainTextToken;

        return response()->json([
            'success' => true,
            'user' => $user,
            'token' => $token
        ]);
    }
}
