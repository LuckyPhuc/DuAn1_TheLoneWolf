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
        return view("admin.posts.index", compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.posts.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'title' => "required|min:5",
                'description' => "required|min:10",
                'body' => "required|min:10"
            ],
            [
                'required' => ':attribute không được để trống',
                'min' => ':attribute không ít hơn :min'
            ],
            [
                'title' => 'Tiêu đề bài viết',
                'description' => 'Mô tả ngắn',
                'body' => 'Nội dung bài viết'
            ]
        );
        $input = $request->all();
        $user = auth()->user();
        $input['user_id'] = $user->id;
        $posts = Posts::create($input);
        return redirect()->route("admin.posts.create")->with('success', 'Thêm mới thành công!', compact('posts'));
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
        $posts = Posts::findOrFail($id);
        return view('admin.posts.edit', compact('posts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'title' => "required|min:5",
                'description' => "required|min:10",
                'body' => "required|min:10"
            ],
            [
                'required' => ':attribute không được để trống',
                'min' => ':attribute không ít hơn :min'
            ],
            [
                'title' => 'Tiêu đề bài viết',
                'description' => 'Mô tả ngắn',
                'body' => 'Nội dung bài viết'
            ]
        );

        $user = auth()->user();
        $input = $request->all();
        $post = Posts::findOrFail($id);
        $post->update($input);
        $post->user_id = $user->id;
        $post->save();
        return redirect()->route('admin.posts.list')->with('success', 'cập nhật thàng cồn thành công!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $posts = Posts::find($id);


        if ($posts->delete($id)) {
            return redirect()->route('admin.posts.list')
                ->with('success', 'Xóa thành công thành công');
        } else {
            return redirect()->route('admin.posts.list',)->with('error', 'Lỗi');
        }
    }
}
