<?php

use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\Size;
use Illuminate\Support\Facades\Log;


if (! function_exists('CreateData')) {
    function CreateData($model, array $data)
    {
        try {
            return $model::create($data);
        } catch (\Exception $e) {
            Log::error('CreateData Error: '.$e->getMessage());
            return false;
        }
    }
}
if (! function_exists('GetAll')) {
    function GetAll($model)
    {
        try {
            return $model::get();
        } catch (\Exception $e) {
            Log::error('GetAll Error: '.$e->getMessage());

            return false;
        }
    }
}

if (! function_exists('SingleData')) {
    function SingleData($model, $id)
    {
        try {
            return $model::findOrFail($id);
        } catch (\Exception $e) {
            Log::error('SingleData Error: '.$e->getMessage());

            return false;
        }
    }
}

if (! function_exists('UpdateData')) {
    function UpdateData($model, $id, array $data)
    {
        try {
            $editdata = $model::findOrFail($id);
            return $editdata->update($data);
        } catch (\Exception $e) {
            Log::error('UpdateData Error: '.$e->getMessage());

            return false;
        }
    }
}

if (! function_exists('DeleteData')) {
    function DeleteData($model, $id)
    {
        try {
            $data = $model::findOrFail($id);

            return $data->delete();
        } catch (\Exception $e) {
            Log::error('DeleteData Error: '.$e->getMessage());

            return false;
        }
    }
}

if (! function_exists('CanditionData')) {
    function CanditionData($model, array $condition)
    {
        try {
            $data = $model::where($condition)->firstOrFail();

            return $data;
        } catch (\Exception $e) {
            Log::error('CanditionData Error: '.$e->getMessage());

            return false;
        }
    }
}

if (! function_exists('SuccessResponse')) {
    function SuccessResponse($message)
    {
        return back()->with('success', $message);
    }
}

if (! function_exists('ErrorResponse')) {
    function ErrorResponse($message)
    {
        return back()->with('error', $message);
    }
}

if (!function_exists('GetCategory')) {
    function GetCategory()
    {
        return Category::select('id', 'name', 'slug')
            ->distinct()
            ->get();
    }
}

if (!function_exists('allProduct')) {
    function allProduct()
    {
        return Product::select('id', 'name', 'slug')
            ->distinct()
            ->get();
    }
}
if (!function_exists('GetSize')) {
    function GetSize()
    {
        return Size::select('id', 'name', 'size_magerment')
            ->get();
    }
}

if (!function_exists('GetColor')) {
    function GetColor()
    {
        return Color::select('id', 'name', 'code')
            ->get();
    }
}

if (!function_exists('getRelationData')) {

    function getRelationData($model, $relations = [],  $perPage = 5,$select = [])
    {
        return $model::with($relations)
            ->paginate($perPage)
            ->select($select);
    }
}


