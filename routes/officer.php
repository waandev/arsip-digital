<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Officer Routes
|--------------------------------------------------------------------------
*/

Route::prefix('officer')->group(static function () {

    // Guest routes
    Route::middleware('guest:officer')->group(static function () {
        // Auth routes
        Route::get('login', [\App\Http\Controllers\Officer\Auth\AuthenticatedSessionController::class, 'create'])->name('officer.login');
        Route::post('login', [\App\Http\Controllers\Officer\Auth\AuthenticatedSessionController::class, 'store']);
        // Forgot password
        Route::get('forgot-password', [\App\Http\Controllers\Officer\Auth\PasswordResetLinkController::class, 'create'])->name('officer.password.request');
        Route::post('forgot-password', [\App\Http\Controllers\Officer\Auth\PasswordResetLinkController::class, 'store'])->name('officer.password.email');
        // Reset password
        Route::get('reset-password/{token}', [\App\Http\Controllers\Officer\Auth\NewPasswordController::class, 'create'])->name('officer.password.reset');
        Route::post('reset-password', [\App\Http\Controllers\Officer\Auth\NewPasswordController::class, 'store'])->name('officer.password.update');
    });

    // Verify email routes
    Route::middleware(['auth:officer'])->group(static function () {
        Route::get('verify-email', [\App\Http\Controllers\Officer\Auth\EmailVerificationPromptController::class, '__invoke'])->name('officer.verification.notice');
        Route::get('verify-email/{id}/{hash}', [\App\Http\Controllers\Officer\Auth\VerifyEmailController::class, '__invoke'])->middleware(['signed', 'throttle:6,1'])->name('officer.verification.verify');
        Route::post('email/verification-notification', [\App\Http\Controllers\Officer\Auth\EmailVerificationNotificationController::class, 'store'])->middleware('throttle:6,1')->name('officer.verification.send');
    });

    // Authenticated routes
    Route::middleware(['auth:officer', 'verified'])->group(static function () {
        // Confirm password routes
        Route::get('confirm-password', [\App\Http\Controllers\Officer\Auth\ConfirmablePasswordController::class, 'show'])->name('officer.password.confirm');
        Route::post('confirm-password', [\App\Http\Controllers\Officer\Auth\ConfirmablePasswordController::class, 'store']);
        // Logout route
        Route::post('logout', [\App\Http\Controllers\Officer\Auth\AuthenticatedSessionController::class, 'destroy'])->name('officer.logout');
        // General routes
        Route::get('/', [\App\Http\Controllers\Officer\OfficerController::class, 'index'])->name('officer.index');
        Route::get('profile', [\App\Http\Controllers\Officer\OfficerController::class, 'profile'])->middleware('password.confirm.officer')->name('officer.profile');
    });
});
