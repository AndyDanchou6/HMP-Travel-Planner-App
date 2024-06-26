<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if (Auth::check() && Auth::user()->role == 'Admin') {
            $inventoryQuery = Inventory::query();

            if ($request->has('search')) {
                $search = $request->input('search');
                $inventoryQuery->where('product_name', 'like', '%' . $search . '%')
                    ->orWhere('price', 'like', '%' . $search . '%')
                    ->orWhere('quantity', 'like', '%' . $search . '%');

                $inventoryQuery->orWhereHas('category', function ($query) use ($search) {
                    $query->where('category_name', 'like', '%' . $search . '%');
                });
            }

            $categories = Category::pluck('category_name', 'id');
            $inventories = $inventoryQuery->paginate(4);

            return view('inventories.index', compact('inventories', 'categories'));
        } elseif (Auth::check()) {
            return redirect()->route('error404');
        } else {
            return redirect()->route('error404');
        }
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
        $validator = Validator::make($request->all(), [
            'product_name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'quantity' => 'required|integer|min:0',
            'information' => 'required',
            'description' => 'required',
            'category_id' => 'required|exists:categories,id',
            'product_img' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $item = new Inventory();

        $item->product_name = $request->input('product_name');
        $item->price = $request->input('price');
        $item->quantity = $request->input('quantity');
        $item->category_id = $request->input('category_id');
        $item->information = $request->input('information');
        $item->description = $request->input('description');

        if ($request->hasFile('product_img')) {
            $avatarPath = $request->file('product_img')->store('products', 'public');
            $item->product_img = $avatarPath;
        }

        $item->save();

        return redirect()->back()->with('success', 'Created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Inventory $inventory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Inventory $inventory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'product_name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'quantity' => 'required|integer|min:0',
            'information' => 'required|string|max:1000',
            'description' => 'required|string|max:1000',
            'category_id' => 'required|exists:categories,id',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $item = Inventory::findOrFail($id);

        $item->product_name = $request->input('product_name');
        $item->price = $request->input('price');
        $item->information = $request->input('information');
        $item->category_id = $request->input('category_id');
        $item->description = $request->input('description');
        $item->quantity = $request->input('quantity');

        if ($request->hasFile('product_img')) {
            $avatarPath = $request->file('product_img')->store('products', 'public');
            $item->product_img = $avatarPath;
        }

        $item->save();

        return redirect()->back()->with('success', 'Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Inventory::findOrFail($id);
        $item->delete();

        return redirect()->back()->with('success', 'Deleted successfully.');
    }

    // public function searchItems(Request $request)
    // {
    //     $ids = $request->input('ids', []);

    //     $items = Inventory::whereIn('id', $ids)->get();

    //     // return view('shop.carts', compact('selectedItems'));

    //     return response()->json([
    //         'status' => 200,
    //         'message' => 'Items Found',
    //         'data' => $items
    //     ]);

    // }
}
