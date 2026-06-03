<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductPrice;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index()
    {
        return view('admin.products.creat');
    }

    public function produtList()
    {
        return view('admin.listings.product_list');
    }

    public function product_image()
    {
        return view('admin.products.Image');
    }

    public function product_price()
    {
        return view('admin.products.product_price');
    }

    public function product_color()
    {
        return view('admin.products.color');
    }

    public function product_category()
    {
        $categories = GetAll(Category::class) ?? [];

        return view('admin.products.category', compact('categories'));
    }

    public function product_variants()
    {
        return view('admin.products.variants.create_variant');
    }

    public function store_product(Request $request)
    {
        try {

            $request->validate([
                'category_id' => 'required',
                'sub_category_id' => 'nullable',
                'name' => 'required|string|max:255',
                'description' => 'required',
                'price' => 'required|numeric',
                'sale_price' => 'required|numeric',
                'stock' => 'required|integer',
                'thumbnail' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
                'status' => 'required',
                'delivery' => 'required',
                'material_breakdown' => 'required',
                'product_story' => 'required',
                'payment' => 'required',
                'packaging' => 'required',
                'the_line' => 'required',
            ]);

            $uploadFile = null;

            if ($request->hasFile('thumbnail')) {

                $file = $request->file('thumbnail');

                $filename = time().'_'.uniqid().'.'.$file->getClientOriginalExtension();

                $destinationPath = public_path('thumbnails');

                if (! file_exists($destinationPath)) {
                    mkdir($destinationPath, 0777, true);
                }

                $file->move($destinationPath, $filename);

                $uploadFile = 'thumbnails/'.$filename;
            }

            $product_slug = Str::slug($request->name);

            $slugExists = Product::where('slug', $product_slug)->exists();

            if ($slugExists) {
                $product_slug .= '-'.time();
            }

            $data = [
                'category_id' => $request->category_id,
                'sub_category_id' => $request->sub_category_id,
                'name' => $request->name,
                'slug' => $product_slug,
                'description' => $request->description,
                'price' => $request->price,
                'sale_price' => $request->sale_price,
                'sku' => 'PRD-'.strtoupper(uniqid()),
                'stock' => $request->stock,
                'thumbnail' => $uploadFile,
                'status' => $request->status,
                'delivery' => $request->delivery,
                'material_breakdown' => $request->material_breakdown,
                'product_story' => $request->product_story,
                'payment' => $request->payment,
                'packaging' => $request->packaging,
                'the_line' => $request->the_line,
            ];

            $result = CreateData(Product::class, $data);

            if ($result) {
                return SuccessResponse('Product Created Successfully');
            }

            return ErrorResponse('Product Creation Failed');

        } catch (\Illuminate\Validation\ValidationException $e) {

            return ErrorResponse($e->getMessage());

        } catch (\Exception $e) {

            return ErrorResponse($e->getMessage());
        }
    }

    public function store_price(Request $request)
    {
        try {
            $validate = $request->validate([
                'product_id' => 'required|numeric',
                'price' => 'required',
                'country' => 'required',
            ]);

            $result = CreateData(ProductPrice::class, $validate);
            if ($result) {
                return SuccessResponse('Product Price Added SuccessFul');
            }

            return ErrorResponse('Product Price Creation Failed');
        } catch (\Exception $e) {
            return ErrorResponse($e->getMessage());
        }

    }

    public function store_color(Request $request)
    {
        try {
            $validate = $request->validate([
                'name' => 'required',
                'code' => 'required',
            ]);

            $result = CreateData(Color::class, $validate);
            if ($result) {
                return SuccessResponse('Color Added SuccessFul');
            }

            return ErrorResponse('Color Price Creation Failed');
        } catch (\Exception $e) {
            return ErrorResponse($e->getMessage());
        }

    }

    public function store_image(Request $request)
    {

        try {
            $request->validate([
                'product_id' => 'required',
                'image' => 'array',
                'image.*' => 'required',
            ]);

            $uploadFile = [];

            if ($request->hasFile('image')) {
                foreach ($request->file('image') as $image) {
                    $filename = time().'_'.uniqid().'.'.$image->getClientOriginalExtension();
                    $destinationPath = public_path('images');
                    $image->move($destinationPath, $filename);
                    $uploadFile[] = 'images/'.$filename;
                }
            }

            $data = [
                'product_id' => $request->product_id,
                'image' => $uploadFile,
            ];

            $result = CreateData(ProductImage::class, $data);
            if ($result) {
                return SuccessResponse('Product Images Added SuccessFul');
            }

            return ErrorResponse('Product Images Creation Failed');
        } catch (\Exception $e) {
            return ErrorResponse($e->getMessage());
        }

    }
}
