@extends('page')

@section('title', 'Ajouter un produit au catalogue')

@section('content')

    <h2>Créer un nouveau produit</h2>

    <form action="{{ @route('product.store') }}" method="post">
        @csrf
        <ul>
            <li>
                <label for="name">Nom du produit</label>
                <input type="text" name="name" id="name" required>
            </li>
            <li>
                <label for="price">Prix</label>
                <input type="text" name="price" id="price" required>
            </li>
        </ul>
        <input type="submit" value="Créer le produit">
    </form>

@endsection