<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

Route::middleware('auth:sanctum')->group(function () {

    Route::get('/user', function (Request $request) {

        $user = $request->user();
        return response()->json([
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
            'roles' => $user->getRoleNames(),
            'phone' => $user->phone,
            'address' => $user->address,
            'birthdate' => $user->birthdate,
            'gender' => $user->gender,
            'profile_picture' => $user->profile_picture,
            'is_active' => $user->is_active,
            'last_login_at' => $user->last_login_at,
            'created_at' => $user->created_at,
            'updated_at' => $user->updated_at,
        ]);
    });

    Route::get('/user/permissions', function () {
        /** @var User $user */
        $user = Auth::user();

        return response()->json([
            'permissions' => $user->getAllPermissions()->pluck('name'),
        ]);
    });
});
