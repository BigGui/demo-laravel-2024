<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>

<body>
    <header>
        <h1>@yield('title')</h1>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Les produits</a></li>
                <li><a href="{{ route('product.create') }}">Créer un produit</a></li>
            </ul>
        </nav>
    </header>
    @section('content')

        Main content

    @show
</body>

</html>