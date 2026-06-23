@extends('layouts.app')

@section('title', 'Specific')

@section('content')

    <x-category.specific :product="$products" />
@endsection
