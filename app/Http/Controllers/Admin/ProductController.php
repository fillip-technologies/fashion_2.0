<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductPrice;
use App\Models\ProductVariant;
use App\Models\Size;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index()
    {
        return view('admin.products.creat');
    }

    public function sizes()
    {
        $sizes = Size::paginate(5);
        return view('admin.products.size_create',compact('sizes'));
    }

    public function produtList()
    {
    $productList = Product::with([
    'category:id,name',
    'productImg:id,product_id,image'])->select(
    'id',
    'category_id',
    'name',
    'thumbnail',
    'price',
    'sale_price',
    'sku',
    'stock',
    'status'
)
->get() ?? [];
        return view('admin.listings.product_list',compact('productList'));
    }
    public function product_image()
    {
        $productImage = ProductImage::with('product')->paginate(5) ?? [];
        return view('admin.products.Image',compact('productImage'));
    }

    public function product_price()
    {
        $productPrice = ProductPrice::with(['product:id,name'])->select('price','country','product_id')->paginate(5);
        return view('admin.products.product_price',compact('productPrice'));
    }

    public function product_color()
    {
        $colors = Color::paginate(5);
        return view('admin.products.color',compact('colors'));
    }

    public function product_category()
    {
        $categories = GetAll(Category::class) ?? [];
        return view('admin.products.category', compact('categories'));
    }

    public function product_variants()
    {
        $productVarialt = ProductVariant::with(['color:id,code,name','size:id,name','product:id,name'])->paginate(5) ?? [];
        return view('admin.products.variants.create_variant',compact('productVarialt'));
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

    public function store_size(Request $request)
    {
        try {
            $validate = $request->validate([
                'name' => 'required',
                'size_magerment' => 'required',
            ]);

            $result = CreateData(Size::class, $validate);
            if ($result) {
                return SuccessResponse('Create Size SuccessFull');
            }

            return ErrorResponse('Size Creation Failed');

        } catch (\Exception $e) {
            return ErrorResponse($e->getMessage());
        }
    }

    public function store_product_variant(Request $request)
    {
        try {
            $request->validate([
                'product_id' => 'required|integer',
                'color_id' => 'required|integer',
                'size_id' => 'required|integer',
                'sku' => 'nullable',
                'price' => 'required',
                'sale_price' => 'required',
                'stock' => 'required',
                'image' => 'array|nullable',
                'image.*' => 'required',
                'status' => 'required',
            ]);

            $uploadFiles = [];
            if ($request->hasFile('image')) {

                foreach ($request->file('image') as $image) {

                    $filename = time().'_'.uniqid().'.'.$image->getClientOriginalExtension();

                    $uploadPath = public_path('product_variant');

                    $image->move($uploadPath, $filename);

                    $uploadFiles[] = 'product_variant/'.$filename;
                }
            }

            $data = [
                'product_id' => $request->product_id,
                'color_id' => $request->color_id,
                'size_id' => $request->size_id,
                'sku' => $request->sku,
                'price' => $request->price,
                'sale_price' => $request->sale_price,
                'stock' => $request->stock,
                'image' => $uploadFiles,
                'status' => $request->status,
            ];

            $result = CreateData(ProductVariant::class, $data);
            if ($result) {
                return SuccessResponse('Product Variant Created SuccessFul');
            }

            return ErrorResponse('Product Variant Creation Failed');
        } catch (\Exception $e) {
            return ErrorResponse($e->getMessage());
        }

    }
}
