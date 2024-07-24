@extends('page')

@section('title', 'Consulter notre catalogue de produits')

@section('content')

    <h2>Product List</h2>

    <ul>
        @foreach ($products as $product)
            <x-product-item :product="$product"/>
        @endforeach
    </ul>

@endsection