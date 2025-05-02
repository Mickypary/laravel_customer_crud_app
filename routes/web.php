<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PostController;
use App\Http\Middleware\CheckRoleMiddleware;
use App\Models\Address;
use App\Models\City;
use App\Models\Country;
use App\Models\Post;
use App\Models\State;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
// use DB;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('customers/trash', [CustomerController::class, 'trashIndex'])->name('customers.trash');
Route::get('customers/restore/{customer}', [CustomerController::class, 'restore'])->name('customers.restore');
Route::delete('customers/delete/{customer}', [CustomerController::class, 'forceDelete'])->name('customers.force.delete');
Route::resource('customers', CustomerController::class);


// Test route for practice
Route::get('join', function () {
    // $usersWithOrders =  \DB::table('users')->join('orders', 'users.id', '=', 'orders.user_id')->select('users.name', 'orders.product_name')->get();

    // $usersWithOrders =  DB::table('users')->leftJoin('orders', 'users.id', '=', 'orders.user_id')->select('users.name', 'orders.product_name')->get();

    // $ordersWithUsers =  DB::table('users')->rightJoin('orders', 'users.id', '=', 'orders.user_id')->select('users.name', 'orders.product_name')->get();

    $fullOuterJoin =  DB::table('users')->leftJoin('orders', 'users.id', '=', 'orders.user_id')->select('users.name', 'orders.product_name')->union(DB::table('users')->rightJoin('orders', 'users.id', '=', 'orders.user_id')->select('users.name', 'orders.product_name'))->get();
    dd($fullOuterJoin);
});



// Left Join:

// $users = DB::table('users')
//     ->leftJoin('posts', 'users.id', '=', 'posts.user_id')
//     ->get();

// Right Join:

// $users = DB::table('users')
//     ->rightJoin('posts', 'users.id', '=', 'posts.user_id')
//     ->get();



Route::get('users', function () {
    $users = User::all();
    // $address = Address::all();
    return view('user', compact('users'));
});

Route::get('posts', function () {
    // Tag::insert([
    //     [
    //         'name' => 'Laravel'
    //     ],
    //     [
    //         'name' => 'JavaScript'
    //     ],
    //     [
    //         'name' => 'PHP'
    //     ],
    // ]);

    $post = Post::first();
    // $tag = Tag::first();

    // $post->tags()->attach($tag);
    // $post->tags()->detach([2]);
    // $post->tags()->sync([4,3]);

    $posts = Post::all();

    return view('post', compact('posts'));
});

Route::get('tags', function () {
    $tags = Tag::all();
    return view('tag', compact('tags'));
});

Route::get('location', function () {
    // $country = new Country(['name' => 'United States']);
    // $country->save();

    // $state = new State(['name' => 'Califonia']);
    // $country->states()->save($state);

    // $state->cities()->createMany([
    //     ['name' => 'Los Angeles'],
    //     ['name' => 'San Francisco'],
    // ]);

    $country = Country::first();
    return view('location', compact('country'));
});


Route::get('image', function () {
    $user = User::find(1);
    // $user->image()->create([
    //     'path' => 'upload/user_one.jpg'
    // ]);
    // dd($user);

    // $post = Post::find(1);
    // $post->image()->create([
    //     'path' => 'upload/post_one.jpg'
    // ]);

    return $user->image;
});


Route::get('post', [PostController::class, 'index'])->name('post.index');
Route::post('post', [PostController::class, 'store'])->name('post.store');
