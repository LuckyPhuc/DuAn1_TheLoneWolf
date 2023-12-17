<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;
use App\Models\Suppliers;
use App\Models\Categories;
use App\Models\Posts;
use App\Models\Products;

class AppLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        $suppliers = Suppliers::all();
        $categories = Categories::all();
        $posts = Posts::all();
        $products = Products::all();
        return view('profile', compact('suppliers', 'categories', 'products', 'posts'));
    }
}
