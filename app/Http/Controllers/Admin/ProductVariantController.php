<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductVariant;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductVariantController extends Controller
{
    public function index()
    {
        $variants = ProductVariant::with('product')
                    ->latest()
                    ->paginate(10);

        return view('admin.variants.index', compact('variants'));
    }

    public function create()
    {
        $products = Product::where('status',1)->get();
        return view('admin.variants.create', compact('products'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|integer'
        ]);

        ProductVariant::create([
            'product_id' => $request->product_id,
            'sku' => $request->sku ?? strtoupper(Str::random(8)),
            'size' => $request->size,
            'color' => $request->color,
            'price' => $request->price,
            'discount_price' => $request->discount_price,
            'stock' => $request->stock,
        ]);

        return redirect()->route('admin.variants.index')
            ->with('success','Variant Created Successfully');
    }

    public function edit($id)
    {
        $variant = ProductVariant::findOrFail($id);
        $products = Product::all();

        return view('admin.variants.edit', compact('variant','products'));
    }

    public function update(Request $request, $id)
    {
        $variant = ProductVariant::findOrFail($id);

        $variant->update([
            'product_id' => $request->product_id,
            'sku' => $request->sku,
            'size' => $request->size,
            'color' => $request->color,
            'price' => $request->price,
            'discount_price' => $request->discount_price,
            'stock' => $request->stock,
        ]);

        return redirect()->route('admin.variants.index')
            ->with('success','Variant Updated Successfully');
    }

    public function destroy($id)
    {
        ProductVariant::findOrFail($id)->delete();

        return back()->with('success','Variant Deleted Successfully');
    }
}
