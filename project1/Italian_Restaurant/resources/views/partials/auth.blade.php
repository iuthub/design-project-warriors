I Bilol, [05.05.19 14:37]
use Illuminate\Support\Facades\Auth;

// Get the currently authenticated user...
$user = Auth::user();

// Get the currently authenticated user's ID...
$id = Auth::id();

I Bilol, [05.05.19 14:37]
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Update the user's profile.
     *
     * @param  Request  $request
     * @return Response
     */
    public function update(Request $request)
    {
        // $request->user() returns an instance of the authenticated user...
    }
}

I Bilol, [05.05.19 14:37]
Route::get('profile', function () {
    // Only authenticated users may enter...
})->middleware('auth');

I Bilol, [05.05.19 14:37]
public function __construct()
{
    $this->middleware('auth');
}