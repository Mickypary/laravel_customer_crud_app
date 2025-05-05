<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post as PostModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class Post extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = PostModel::all();
        // $posts = PostModel::where('user_id', Auth::user()->id)->get();
        return view('post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = PostModel::find($id);
        // if (!Gate::allows('update-post', $post)) {
        //     abort(403);
        // }

        Gate::authorize('update', $post);

        return view('post.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
