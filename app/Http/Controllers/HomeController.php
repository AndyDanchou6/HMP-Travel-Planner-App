<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SelectedItems;
use App\Models\Inventory;
use App\Models\Category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $package = SelectedItems::where('status', 'forPackage')->count();
        $delivery = SelectedItems::where('status', 'readyForRetrieval ')->where('order_retrieval', 'delivery')->count();
        $pickup = SelectedItems::where('status', 'readyForRetrieval')->where('order_retrieval', 'pickup')->count();
        $products = Inventory::where('quantity', '<=', 10)->get();
        $categories = Category::pluck('category_name', 'id');

        return view('home', compact('package', 'delivery', 'pickup', 'products', 'categories'));
    }
}
