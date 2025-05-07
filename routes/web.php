<?php

use App\Http\Controllers\Post;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Mail\SendMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('user/dashboard', function () {
    return view('user-dashboard');
})->name('user.dashboard')->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

// Route::resource('post', Post::class)->middleware('auth');

Route::get('post', [PostController::class, 'index'])->name('post.index');

Route::get('post/create', [PostController::class, 'create'])->name('post.create');


Route::get('send-mail', function () {
    return view('send-mail');
});

Route::post('send-mail', function (Request $request) {
    // Mail::raw($request->message, function ($message) use ($request) {
    //     // $message->from('info@mrichtec.com', 'John Doe');
    //     // $message->sender('john@johndoe.com', 'John Doe');
    //     // $message->to($request->email, 'John Doe');
    //     $message->to($request->email, 'John Doe')
    //         ->subject('Laravel Test Email')
    //         ->from('info@grenvilleschool.com', 'Grenville');
    //     // $message->cc('john@johndoe.com', 'John Doe');
    //     // $message->bcc('john@johndoe.com', 'John Doe');
    //     // $message->replyTo('john@johndoe.com', 'John Doe');
    //     // $message->subject('Laravel Test Email');
    //     // $message->priority(3);
    //     // $message->attach('pathToFile');
    // });

    // Mail::to($request->email)->send(new SendMail($request->message));
    Mail::to($request->email)->queue(new SendMail($request->message));
    // Then use php artisan queue:work to finish the process on cmd

    dd('Email sent');
})->name('send.mail');



// Components
Route::get('components', function () {
    return view('blade-component');
});


// Session
Route::get('session', function (Request $request) {
    // Store Session
    // $request->session()->put('foo', ['php', 'laravel', 'vue']);
    // request()->session()->put('foo', ['php', 'laravel', 'vue']);
    // session()->put('foo', ['php', 'laravel', 'vue']);
    // session(['cart' => 'Product 1']);
    // session(['cart' => ['Product 1', 'Product 2']]);
    // Session::put('phone', 'Samsung');

    // Get Session
    // $value = Session::get('phone');
    $value = session('cart', 'This is default value incase the key does not exist');

    // Delete session
    // session()->forget('cart');
    // Session::forget(['cart', 'phone', 'foo']);

    // Or Flush
    session()->flush();


    return view('session', compact('value'));
});

// Route::get('cache', function () {
//     // Cache::put('post', 'post title one ', $seconds = 5);
//     // $value = Cache::get('post');
//     // dd($value);
//     // $users = User::all();

//     // $users = Cache::rememberForever('users', function () {
//     //     // return DB::table('users')->get();
//     //     return User::all();
//     // });

//     // To get a one time cache and delete immediately
//     // $users = Cache::pull('users');

//     // $users = [];

//     // To delete a cache
//     // Cache::forget('users');

//     // if (Cache::has('users')) {
//     //     dd('Cache is not empty');
//     // }

//     return view('cache', compact('users'));
// });
