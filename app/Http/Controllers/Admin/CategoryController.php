<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::with('parent')
                        ->latest()
                        ->paginate(10);

        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        $parents = Category::whereNull('parent_id')
                    ->where('status',1)
                    ->get();

        return view('admin.categories.create', compact('parents'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        Category::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'parent_id' => $request->parent_id,
            'status' => $request->status ?? 1
        ]);

        return redirect()->route('admin.categories.index')
            ->with('success','Category Created Successfully');
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        $parents = Category::whereNull('parent_id')
                    ->where('id','!=',$id)
                    ->get();

        return view('admin.categories.edit', compact('category','parents'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);

        $category->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'parent_id' => $request->parent_id,
            'status' => $request->status
        ]);

        return redirect()->route('admin.categories.index')
            ->with('success','Category Updated Successfully');
    }

    public function destroy($id)
    {
        Category::findOrFail($id)->delete();

        return back()->with('success','Category Deleted Successfully');
    }
}
