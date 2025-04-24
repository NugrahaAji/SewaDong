<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\IdentityController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/phpinfo', function () {
    phpinfo();
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('signup', function () {
    return view('auth.register');
});

Route::middleware('guest')->group(function () {
    Route::get('/signup', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('/signup', [RegisteredUserController::class, 'store']);
});

Route::middleware(['auth', 'redirect.if.verified'])->group(function () {
    Route::get('/signup/upload', [IdentityController::class, 'showUploadForm'])->name('identity.upload');
    Route::post('/signup/upload', [IdentityController::class, 'store'])->name('identity.store');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/auth/google', function () {
    return Socialite::driver('google')->redirect();
});

Route::get('/auth/google/callback', function () {
    $googleUser = Socialite::driver('google')->stateless()->user();

    // Cari user berdasarkan email
    $user = User::where('email', $googleUser->getEmail())->first();

    if (!$user) {
        // Kalau user belum ada → buat user baru (otomatis signup)
        $user = User::create([
            'name' => $googleUser->getName(),
            'email' => $googleUser->getEmail(),
            'email_verified_at' => now(),
            'password' => bcrypt(Str::random(16)),
        ]);
    }

    Auth::login($user);
    return redirect('/signup/upload');
});

Route::get('/profile', [ProfileController::class, 'edit'])
    ->name('profile.edit'); // Pastikan ini ada
         
Route::patch('/profile', [ProfileController::class, 'update'])
    ->name('profile.update');
         
Route::delete('/profile', [ProfileController::class, 'destroy'])
    ->name('profile.destroy');

require __DIR__.'/auth.php';

Route::get('signin-up', function () {
    return view('frontend.signin-up');
});
Route::get('login', function () {
    return view('frontend.login');
});
Route::get('signin', function () {
    return view('frontend/signin');
});
Route::get('beranda', function () {
    return view('frontend/beranda');
});
Route::get('kategori-jasa', function () {
    return view('frontend/kategori-jasa');
});
Route::get('kategori-barang', function () {
    return view('frontend/kategori-barang');
});
Route::get('detail', function () {
    return view('frontend/detail');
});
Route::get('riwayat', function () {
    return view('frontend/riwayat');
});
Route::get('pembayaran', function () {
    return view('frontend/pembayaran');
});
Route::get('pembayaran-scan', function () {
    return view('frontend/pembayaran-scan');
});
Route::get('pengembalian', function () {
    return view('frontend/pengembalian');
});

