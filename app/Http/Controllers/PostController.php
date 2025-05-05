<?php

namespace App\Http\Controllers;

use App\Http\Middleware\CheckRoleMiddleware;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class PostController extends Controller
{

    // class PostController extends Controller implements HasMiddleware

    // static function middleware()
    // {
    //     return [new Middleware(CheckRoleMiddleware::class, only: ['store'])];
    // }

    function index()
    {
        // return view('post.index');
        // return redirect()->action([$this->create()]);
        // return redirect()->action([PostController::class, 'create'], ['id' => 1]);
        // return redirect()->away('https://google.com');
        // return to_route('post.create');

        // return response()->json([
        //     'name' => 'John Doe',
        //     'state' => 'CA',
        // ]);

        // return [
        //     'name' => 'John Doe',
        //     'state' => 'CA',
        // ];

        // return response()->download(public_path('uploads/common_room1.jpg'));
        return response()->file(public_path('uploads/common_room1.jpg'));
    }


    function store(Request $request)
    {
        dd($request->all());
    }

    function create()
    {

        dd("This is create post");
        // return redirect()->back();
    }
}



// Laravel calls interface Contract. So Interface is the same as Contract in Laravel