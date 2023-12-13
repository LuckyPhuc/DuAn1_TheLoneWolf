<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Posts;
use Illuminate\Http\Request;


class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Posts::with('users')->get();
        return view("admin.Posts.index", compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.Posts.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => "required",
            'description' => "required",
            'body' => "required"
        ]);
        $input = $request->all();
        $user = auth()->user();
        $input['user_id'] = $user->id;
        $posts = Posts::create($input);
        return redirect()->route("admin.Posts.create")->with('success', 'Thêm mới thành công!');
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
        //
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
