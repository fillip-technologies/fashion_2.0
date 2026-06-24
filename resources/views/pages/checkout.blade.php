@extends('layouts.app')

@section('title', 'Checkout')

@section('content')

    <x-cart.checkout :myItems="$cartdata" :totalPrice="$totalprice" :shipPrice="$shipping" :currentPrice="$currentPrice" />
@endsection
