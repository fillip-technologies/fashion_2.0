@extends('layouts.app')

@section('title', 'Product Details')

@section('content')

    <x-category.productdetails :details="$details_product" />
@endsection
