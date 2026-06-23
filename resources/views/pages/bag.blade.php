@extends('layouts.app')

@section('title', 'Bag')

@section('content')

    <x-cart.bag  :bagDatas="$cartdata" :totalprice="$totalprice"/>
@endsection
