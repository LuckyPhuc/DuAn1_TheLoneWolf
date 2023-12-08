<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\websiteSEO;

class WebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $SEO = websiteSEO::all();
        if (isset($SEO)) {
            return view('admin.website.SEO.index', compact('SEO'));
        }
        return view('admin.website.SEO.index', ['users' => $SEO]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.website.SEO.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'title' => 'required|string|max:255',
                'description' => 'required|string',
                'hotline' => 'required|string|max:10',
                'email_support' => 'required|email|max:255',
                'facebook' => 'required|nullable|url|max:255',
                'youtube' => 'required|nullable|url|max:255',
                'instagram' => 'required|nullable|url|max:255',
                'tiktok' => 'required|nullable|url|max:255',
                'zalo' => 'required|nullable|string|max:255',
            ],
            [
                'title.required' => 'Tiêu đề không được bỏ trống',
                'description.required' => 'Mô tả không được bỏ trống',
                'description.string' => 'Trường mô tả phải là một chuỗi.',
                'hotline.required' => 'Hotline không được bỏ trống',
                'hotline.string' => 'Trường đường dây nóng phải là một chuỗi.',
                'email_support.required' => 'Email không được bỏ trống',
                'email_support.email' => 'Email không đúng định dạng',
                'facebook.required' => 'Facebook không được bỏ trống',
                'youtube.required' => 'Youtube không được bỏ trống',
                'instagram.required' => 'Instagram không được bỏ trống',
                'tiktok.required' => 'TikTok không được bỏ trống',
                'zalo.required' => 'Zalo không được bỏ trống'
            ]
        );



        $yourModel = new websiteSEO();
        $yourModel->title = $request->title;
        $yourModel->description = $request->description;
        $yourModel->hotline = $request->hotline;
        $yourModel->email_support = $request->email_support;
        $yourModel->facebook = $request->facebook;
        $yourModel->youtube = $request->youtube;
        $yourModel->instagram = $request->instagram;
        $yourModel->tiktok = $request->tiktok;
        $yourModel->zalo = $request->zalo;

        $yourModel->save();

        // Redirect or return a response as needed
        return redirect()->route('admin.website.create')->with('success', 'Dữ liệu đã được lưu trữ thành công.');
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
        $SEO = websiteSEO::findOrFail($id);
        return view('admin.website.SEO.edit', compact('SEO'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'title' => 'required|string|max:255',
                'description' => 'required|string',
                'hotline' => 'required|string|max:10',
                'email_support' => 'required|email|max:255',
                'facebook' => 'required|nullable|url|max:255',
                'youtube' => 'required|nullable|url|max:255',
                'instagram' => 'required|nullable|url|max:255',
                'tiktok' => 'required|nullable|url|max:255',
                'zalo' => 'required|nullable|string|max:255',
            ],
            [
                'title.required' => 'Tiêu đề không được bỏ trống',
                'description.required' => 'Mô tả không được bỏ trống',
                'description.string' => 'Trường mô tả phải là một chuỗi.',
                'hotline.required' => 'Hotline không được bỏ trống',
                'hotline.string' => 'Trường đường dây nóng phải là một chuỗi.',
                'email_support.required' => 'Email không được bỏ trống',
                'email_support.email' => 'Email không đúng định dạng',
                'facebook.required' => 'Facebook không được bỏ trống',
                'youtube.required' => 'Youtube không được bỏ trống',
                'instagram.required' => 'Instagram không được bỏ trống',
                'tiktok.required' => 'TikTok không được bỏ trống',
                'zalo.required' => 'Zalo không được bỏ trống'
            ]
        );
        $yourModel = new websiteSEO();
        $yourModel->title = $request->title;
        $yourModel->description = $request->description;
        $yourModel->hotline = $request->hotline;
        $yourModel->email_support = $request->email_support;
        $yourModel->facebook = $request->facebook;
        $yourModel->youtube = $request->youtube;
        $yourModel->instagram = $request->instagram;
        $yourModel->tiktok = $request->tiktok;
        $yourModel->zalo = $request->zalo;

        $yourModel->save();

        // Redirect or return a response as needed
        return redirect()->route('admin.website.list')->with('success', 'Dữ liệu đã được cập nhật thành công.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = websiteSEO::find($id);


        if ($category->delete($id)) {
            return redirect()->route('admin.website.list')
                ->with('success', 'Xóa thành công thành công');
        } else {
            return redirect()->route('admin.website.list',)->with('error', 'Lỗi');
        }
    }
}
