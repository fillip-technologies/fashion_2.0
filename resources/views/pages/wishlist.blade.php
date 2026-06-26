@extends('layouts.app')

@section('title', 'Wishlist')

@section('content')
    <x-account.wishlist :latestWishlist="$latestWishlist" :oldestWishlist="$oldestWishlist" />
@endsection
