@extends('page')

@section('title', 'Page produit')

@section('content')

    <h2>{{ $product->name }}</h2>

    <p>Ce fabuleux produit est en vente au prix de {{ $product->price }} €.</p>

@endsection