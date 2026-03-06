<?php

use App\Http\Controllers\Api\AuthController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('auth')->group(function (): void {
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);

    Route::middleware('auth:sanctum')->group(function (): void {
        Route::get('/me', [AuthController::class, 'me']);
        Route::post('/logout', [AuthController::class, 'logout']);
        Route::post('/logout-all', [AuthController::class, 'logoutAll']);

        Route::get('/admin-dashboard', function () {
            return response()->json([
                'message' => 'Welcome, admin. You have role-based access.',
            ]);
        })->middleware('role:admin');

        Route::get('/manage-users', function () {
            return response()->json([
                'message' => 'Permission check passed: manage users.',
            ]);
        })->middleware('permission:manage users');

        Route::get('/admin/users', function (Request $request) {
            return response()->json([
                'requested_by' => $request->user()->email,
                'users' => User::query()
                    ->select('id', 'name', 'email', 'created_at')
                    ->orderByDesc('created_at')
                    ->get(),
            ]);
        })->middleware('role_or_permission:admin|manage users');
    });
});
