<?php

namespace App\Http\Controllers;

use App\Models\Website;
use App\Models\Websites;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $websites = websites::all();
        if (isset($websites)) {
            return view('admin.website.index', ['websites' => $websites]);
        }
        return view('admin.website.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.website.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $title = $request->title;
        $hotline = $request->hotline;
        $email_support = $request->email_support;
        $facebook = $request->facebook;
        $instagram = $request->instagram;
        $youtube = $request->youtube;
        $tiktok = $request->tiktok;
        $zalo = $request->zalo;
        $logo_head = $request->logo_head;
        $logo_footer = $request->logo_foot;
        $favicon = $request->favicon;
        $meta_description = $request->meta_description;
        $head_banner = $request->head_banner;
        $middle_banner = $request->middle_banner;
        $bottom_banner = $request->bottom_banner;

        $website = new Websites;

        $website->title = $title;
        $website->hotline = $hotline;
        $website->email_support = $email_support;
        $website->facebook = $facebook;
        $website->instagram = $instagram;
        $website->youtube = $youtube;
        $website->tiktok = $tiktok;
        $website->zalo = $zalo;
        $website->logo_header = $logo_head;
        $website->logo_footer = $logo_footer;
        $website->favicon = $favicon;
        $website->meta_desc = $meta_description;
        $website->head_banner = $head_banner;
        $website->mid_banner = $middle_banner;
        $website->bot_banner = $bottom_banner;

        $request->validate([
            'title' => "required|min:3|max:100|string",
            'hotline' => "required|numeric|regex:/^\d{10}$/",
            'email_support' => "required|email",
            'facebook' => "required|url",
            'instagram' => "required|url",
            'youtube' => "required|url",
            'tiktok' => "nullable|url",
            'zalo' => "required|numeric|regex:/^\d{9,12}$/",
            'logo_head' => "image|mimes:jpeg,png,jpg,gif,svg|max:5048",
            'logo_foot' => "image|mimes:jpeg,png,jpg,gif,svg|max:5048",
            'favicon' => "image|mimes:jpeg,png,jpg,gif,svg|max:5048",
            'meta_description' => "required|min:3|max:256|string"
        ], [
            'title.required' => "Tên website không được bỏ trống!",
            'title.min' => "Tên website phải có tối thiểu :min ký tự!",
            'title.max' => "Tên website chỉ có tối đa :max ký tự!",
            'hotline.required' => "Số hotline không được bỏ trống!",
            'hotline.numeric' => "Hotline phải là số!",
            'hotline.regex' => "Hotline phải có 10 số!",
            'email_support.required' => "Email support không được bỏ trống!",
            'email_support.email' => "Email này không hợp lệ!",
            'facebook.url' => "Facebook không hợp lệ!",
            'facebook.required' => "Facebook không được bỏ trống!",
            'zalo.required' => "Zalo không được bỏ trống!",
            'zalo.numeric' => "Zalo phải là số!",
            'zalo.regex' => "Zalo phải có 10 số!",
            'instagram.required' => "Instagram không được bỏ trống!",
            'instagram.url' => "Instagram không hợp lệ!",
            'youtube.required' => "Youtube không được bỏ trống!",
            'youtube.url' => "Youtube không hợp lệ!",
            'meta_description.required' => "Mô tả meta description không được bỏ trống !",
            'meta_description.min' => "Meta description phải có tối thiểu :min ký tự!",
            'meta_description.max' => "Meta description chỉ có tối đa :max ký tự!",
            'logo_head.image' => "Logo header không hợp lệ!",
            'logo_head.mimes' => "Logo header phải có dạng jpeg, png, gif hoặc svg!",
            'logo_head.max' => "Logo header giới hạn dung lượng file :size MB!",
            'logo_foot.image' => "Logo footer không hợp lệ!",
            'logo_foot.mimes' => "Logo footer phải có dạng jpeg, png, gif hoặc svg!",
            'logo_foot.max' => "Logo footer giới hạn dung lượng file :size MB!",
            'favicon.image' => "Favicon không hợp lệ!",
            'favicon.mimes' => "Favicon phải có dạng jpeg, png, gif hoặc svg!",
            'favicon.max' => "Favicon giới hạn dung lượng file :size MB!"
        ]);

        if ($website->save()) {
            return redirect()->route('admin.website.create')->with('success', 'Thêm mới website thành công');
        } else {
            return redirect()->route('admin.website.create');
        }
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
    public function edit(Request $request, string $id)
    {
        $id = $request->route('id');
        $users = Websites::find($id);
        return view('admin.website.edit');
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
