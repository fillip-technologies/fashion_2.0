<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function store_category(Request $request)
    {

        $validate = $request->validate([
            'name' => 'required|string',
            'slug' => 'required',
        ]);
        $result = CreateData(Category::class, $validate);
        if ($result) {
            return SuccessResponse('Category Created SuccessFully');
        }

        return ErrorResponse('Category creation failed');
    }

    public function edit_category($id)
    {

        $dataedit = SingleData(Category::class, $id) ?? [];

        return view('admin.products.categorys.category', compact('dataedit'));

    }

    public function update_category(Request $request, $id)
    {
        try {

            $validate = $request->validate([
                'name' => 'nullable|string',
                'slug' => 'nullable|string',
            ]);

            $result = UpdateData(Category::class, $id, $validate);
            if (! $result) {
                return ErrorResponse('Category Update Failed');
            }

            return SuccessResponse('Category Updated Successfully');

        } catch (\Exception $e) {

            return ErrorResponse($e->getMessage());
        }
    }

    public function delete_category($id)
    {
        try {
            $result = DeleteData(Category::class, $id) ?? [];
            if (! $result) {
                return ErrorResponse('Category Deletion Failed');
            }

            return SuccessResponse('Category Deleted Successfully');
        } catch (\Exception $e) {
            return ErrorResponse($e->getMessage());
        }

    }
}
