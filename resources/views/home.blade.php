<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel 8 HTML to PDF Demo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
</head>

<body class="antialiased container mt-5">

    <div class="d-flex flex-row-reverse bd-highlight mb-3">
        <a class="btn btn-success" href="{{ URL::to('/products/create-pdf') }}">Download PDF</a>
    </div>

    <table class="table">
        <thead>
            <tr class="table-primary">
                <td>Product Name</td>
                <td>Price</td>
                <td>In Stock</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($product as $item)
            <tr>
                <td>{{ $item->product_name }}</td>
                <td>{{ $item->price }}</td>
                <td>{{ $item->in_stock }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
