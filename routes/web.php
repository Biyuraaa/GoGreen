<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Str;
use App\Http\Controllers\WalletController;
use App\Models\User;


Route::controller(PagesController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/services', 'services')->name('services');
    Route::get('/gallery', 'gallery')->name('gallery');
    Route::get('/contact', 'contact')->name('contact');
});

Route::middleware(['auth', 'verified'])->prefix('dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('blogs', BlogController::class);
    Route::post('/blogs/{blog}', [BlogController::class, 'donation'])->name('blogs.donation');
    Route::resource('donations', DonationController::class)->except('store');
    Route::resource('galleries', GalleryController::class);
    Route::resource('users', UserController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('comments', CommentController::class);
    Route::get('/wallets/deposit', [WalletController::class, 'deposit'])->name('wallets.deposit');
    Route::post('/wallets/deposit', [WalletController::class, 'storeDeposit'])->name('wallets.storeDeposit');
    Route::resource('wallets', WalletController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/donations', [DonationController::class, 'store'])->name('donations.store');
});


Route::get('/logout', [UserController::class, 'doLogout'])->name('doLogout');

// Route::controller(UserController::class)->group(function () {
//     Route::get('/login', 'login')->name('login');
//     Route::post('/login', 'doLogin')->name('doLogin');
//     Route::get('/register', 'register')->name('register');
//     Route::post('/register', 'doRegister')->name('doRegister');
//     Route::get('/logout', 'doLogout')->name('doLogout');
// });

Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->middleware('guest')->name('password.request');

Route::post('/forgot-password', function (Request $request) {
    $request->validate(['email' => 'required|email']);

    $status = Password::sendResetLink(
        $request->only('email')
    );

    return $status === Password::RESET_LINK_SENT
        ? back()->with(['status' => __($status)])
        : back()->withErrors(['email' => __($status)]);
})->middleware('guest')->name('password.email');

Route::get('/reset-password/{token}', function (string $token) {
    return view('auth.reset-password', ['token' => $token]);
})->middleware('guest')->name('password.reset');

Route::post('/reset-password', function (Request $request) {
    $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:8|confirmed',
    ]);

    $status = Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function (User $user, string $password) {
            $user->forceFill([
                'password' => Hash::make($password)
            ])->setRememberToken(Str::random(60));

            $user->save();

            event(new PasswordReset($user));
        }
    );

    return $status === Password::PASSWORD_RESET
        ? redirect()->route('login')->with('status', __($status))
        : back()->withErrors(['email' => [__($status)]]);
})->middleware('guest')->name('password.update');

require __DIR__ . '/auth.php';
