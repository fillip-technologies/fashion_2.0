<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{



     public function index()
    {
        $products = Product::with('category')->latest()->paginate(10);
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::where('status',1)->get();
        return view('admin.products.creat', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required',
            'name' => 'required'
        ]);

        Product::create([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'brand' => $request->brand,
            'fabric' => $request->fabric,
            'fit' => $request->fit,
            'short_description' => $request->short_description,
            'slug' => Str::slug($request->name),
            'description' => $request->description,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'status' => $request->status ?? 1,
            'is_featured' => $request->is_featured ?? 0,
        ]);

        return redirect()->route('admin.products.index')
            ->with('success','Product Created Successfully');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::where('status',1)->get();
        return view('admin.products.edit', compact('product','categories'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $product->update([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'brand' => $request->brand,
            'fabric' => $request->fabric,
            'fit' => $request->fit,
            'short_description' => $request->short_description,
            'slug' => Str::slug($request->name),
            'description' => $request->description,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'status' => $request->status,
            'is_featured' => $request->is_featured ?? 0,
        ]);

        return redirect()->route('admin.products.index')
            ->with('success','Product Updated Successfully');
    }

    public function destroy($id)
    {
        Product::findOrFail($id)->delete();

        return back()->with('success','Product Deleted Successfully');
    }
}
