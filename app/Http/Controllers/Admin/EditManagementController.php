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
use Exception;
use Illuminate\Http\Request;

class EditManagementController extends Controller
{
    public function editproduct($id){
        $singlepro = Product::with(['category'])->findOrFail($id);
        return view('admin.products.product_edit',compact('singlepro'));
    }

    public function update_product(Request $request, $id)
{
    try {
        $request->validate([
            'category_id' => 'required',
            'sub_category_id' => 'nullable',
            'name' => 'required|string|max:255',
            'description' => 'required',
            'price' => 'required|numeric',
            'sale_price' => 'nullable|numeric', // Made nullable for flexibility
            'stock' => 'required|integer',
            'thumbnail' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'status' => 'required',
            'delivery' => 'required',
            'color' => 'required|string',
            'size' => 'required|string',
            'ref.no' => 'nullable',
            'material_breakdown' => 'required',
            'product_story' => 'required',
            'payment' => 'required',
            'packaging' => 'required',
            'the_line' => 'required',
        ]);


        $product = Product::findOrFail($id);


        $uploadFile = $product->thumbnail;
        if ($request->hasFile('thumbnail')) {

            if ($product->thumbnail && file_exists(public_path($product->thumbnail))) {
                unlink(public_path($product->thumbnail));
            }

            $file = $request->file('thumbnail');
            $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path('thumbnails');
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0777, true);
            }
            $file->move($destinationPath, $filename);
            $uploadFile = 'thumbnails/' . $filename;
        }

        // Handle slug - only update if name changed
        $product_slug = $product->slug;
        if ($product->name != $request->name) {
            $product_slug = Str::slug($request->name);
            $slugExists = Product::where('slug', $product_slug)
                ->where('id', '!=', $id)
                ->exists();
            if ($slugExists) {
                $product_slug .= '-' . time();
            }
        }

        $data = [
            'category_id' => $request->category_id,
            'sub_category_id' => $request->sub_category_id,
            'name' => $request->name,
            'slug' => $product_slug,
            'description' => $request->description,
            'price' => $request->price,
            'sale_price' => $request->sale_price,
            'stock' => $request->stock,
            'thumbnail' => $uploadFile,
            'status' => $request->status,
            'delivery' => $request->delivery,
            'material_breakdown' => $request->material_breakdown,
            'product_story' => $request->product_story,
            'payment' => $request->payment,
            'packaging' => $request->packaging,
            'the_line' => $request->the_line,
            'color' => $request->color,
            'size' => $request->size,
        ];

        // Add ref.no if present
        if ($request->has('ref.no')) {
            $data['ref.no'] = $request->input('ref.no');
        }

        $result = UpdateData(Product::class,$id,$data);

        if ($result) {
            return SuccessResponse('Product Updated Successfully');
        }

        return ErrorResponse('Product Update Failed');

    } catch (\Illuminate\Validation\ValidationException $e) {
        return ErrorResponse($e->getMessage());
    } catch (\Exception $e) {
        return ErrorResponse($e->getMessage());
    }
}

public function product_delete($id){
    try{
      $getdata = Product::findOrFail($id);
        $existImag = $getdata->thumbnail;
        if(file_exists(public_path($existImag))){
            unlink(public_path($existImag));
        }
        $getdata->delete();
         return SuccessResponse('Product Deleted Successfully');
    }catch(\Exception $e){
          return ErrorResponse($e->getMessage());
    }


}

public function editPrice($id){
    $editdata = ProductPrice::with(['product'])->findOrFail($id);
    return view('admin.products.price.edit',compact('editdata'));
}

public function update_price(Request $request,$id){
    try {
            $validate = $request->validate([
                'product_id' => 'required|numeric',
                'price' => 'required',
                'country' => 'required',
            ]);

            $result = UpdateData(ProductPrice::class, $id, $validate);
            if ($result) {
                return SuccessResponse('Product Price Updated SuccessFul');
            }

            return ErrorResponse('Product Price Updation Failed');
        } catch (\Exception $e) {
            return ErrorResponse($e->getMessage());
        }
}

public function price_delete($id){
    try{
        $data = ProductPrice::find($id);
        $data->delete();
        return SuccessResponse('Price Deleted SuccessFully');
    }catch(\Exception $e){
    return ErrorResponse($e->getMessage());
    }
}

public function editColor($id){
    $data = Color::findOrFail($id);
    return view('admin.products.colors.edit',compact('data'));
}

public function update_color(Request $request,$id){
     try {
            $validate = $request->validate([
                'name' => 'required',
                'code' => 'required',
            ]);
            $result = UpdateData(Color::class, $id, $validate);
            if ($result) {
                return SuccessResponse('Color Updated SuccessFul');
            }

            return ErrorResponse('Color Price Updation Failed');
        } catch (\Exception $e) {
            return ErrorResponse($e->getMessage());
        }

}

public function delete_color($id){
    try{
        $data = Color::find($id);
        $data->delete();
        return SuccessResponse('Delete Color SuccessFully');
    }catch(\Exception $e){
     return ErrorResponse('Color Deletion Failed');
    }
}

public function editsize($id){
    $data = Size::find($id);
    return view('admin.products.sizes.edit_size',compact('data'));
}

public function size_update(Request $request,$id){
     try {
            $validate = $request->validate([
                'name' => 'required',
                'size_magerment' => 'required',
            ]);

            $result = UpdateData(Size::class,$id, $validate);
            if ($result) {
                return SuccessResponse('Update Size SuccessFull');
            }

            return ErrorResponse('Size Updation Failed');

        } catch (\Exception $e) {
            return ErrorResponse($e->getMessage());
        }
}

public function delete_size($id){
    try{
        $data = Size::find($id);
        $data->delete();
        return SuccessResponse('Delete Size SuccessFully');
    }catch(\Exception $e){
    return ErrorResponse($e->getMessage());
    }
}

public function editimage($id){
    $data = ProductImage::find($id);
    return view('admin.products.images.edit_image',compact('data'));
}

public function del_image_index(Request $request){
    try{
        $id = $request->id;
        $index = $request->index;

        $data = ProductImage::find($id);

        $images = $data->image;

        unset($images[$index]);
        unlink(public_path($images[$index]));

        $data->image = array_values($images);

        $data->save();

        return response()->json([
            'message' => 'Product Image here',
            'data' => $data
        ],200);

    }catch(\Exception $e){
        ErrorResponse($e->getMessage());
    }
}

public function image_update(Request $request, $id)
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

        $productImage = ProductImage::findOrFail($id);

        $oldImages = $productImage->image ?? [];

        $data = [
            'product_id' => $request->product_id,
            'image' => array_merge($oldImages, $uploadFile),
        ];

        $result = UpdateData(ProductImage::class, $id, $data);

        if ($result) {
            return SuccessResponse('Product Images Updated Successfully');
        }

        return ErrorResponse('Product Images Update Failed');

    } catch (\Exception $e) {
        return ErrorResponse($e->getMessage());
    }
}

public function delete_image($id){
    try{
        $data = ProductImage::findOrfail($id);
        $data->delete();
         return SuccessResponse('Product Images Deleted');
    }catch(\Exception $e){
     return ErrorResponse($e->getMessage());
    }
}


public function editproduct_variant($id){
    $data = ProductVariant::find($id);
    return view('admin.products.variants.variant_edit',compact('data'));
}

public function product_variant_update(Request $request, $id)
{
   try {

        $request->validate([
            'product_id' => 'required|integer',
            'color_id'   => 'required|integer',
            'size_id'    => 'required|integer',
            'sku'        => 'nullable',
            'price'      => 'required',
            'sale_price' => 'required',
            'stock'      => 'required',
            'image'      => 'nullable|array',
            'image.*'    => 'image',
            'status'     => 'required',
        ]);

        $variant = ProductVariant::findOrFail($id);

        $uploadFiles = $variant->image;

        if ($request->hasFile('image')) {


            if (!empty($variant->image)) {
                foreach ($variant->image as $oldImage) {
                    $path = public_path($oldImage);

                    if (file_exists($path)) {
                        unlink($path);
                    }
                }
            }

            $uploadFiles = [];

            foreach ($request->file('image') as $image) {

                $filename = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();

                $uploadPath = public_path('product_variant');

                $image->move($uploadPath, $filename);

                $uploadFiles[] = 'product_variant/' . $filename;
            }
        }

        $data = [
            'product_id' => $request->product_id,
            'color_id'   => $request->color_id,
            'size_id'    => $request->size_id,
            'sku'        => $request->sku,
            'price'      => $request->price,
            'sale_price' => $request->sale_price,
            'stock'      => $request->stock,
            'image'      => $uploadFiles,
            'status'     => $request->status,
        ];

        $result = $variant->update($data);

        if ($result) {
            return SuccessResponse('Product Variant Updated Successfully');
        }

        return ErrorResponse('Product Variant Update Failed');

    } catch (\Exception $e) {
        return ErrorResponse($e->getMessage());
    }
}

public function delete_product_variant($id)
{
     try {
        $variant = ProductVariant::find($id);

        if (!$variant) {
            return ErrorResponse('Product Variant not found');
        }

        if ($variant->image) {
            $images = is_array($variant->image) ? $variant->image : [$variant->image];

            foreach ($images as $image) {
                if ($image && file_exists(public_path($image))) {
                    unlink(public_path($image));
                }
            }
        }
        $result = $variant->delete();

        if ($result) {
            return SuccessResponse('Product Variant Deleted Successfully');
        }

        return ErrorResponse('Product Variant Deletion Failed');

    } catch (\Exception $e) {
        return ErrorResponse($e->getMessage());
    }
}


}
