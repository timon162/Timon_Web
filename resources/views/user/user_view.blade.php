<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form id="id-form-product" action="/product" method="GET">
        @foreach ($data as $item)
            <div class="product-item" data-id="{{ $item->id }}">
                <label id="id-name-product" class="name-product">{{ $item->name_product }}</label><br></br>
                <label id="id-price-product" class="price-product">{{ $item->price }}</label><br></br>
                <label id="id-quantity-product" class="quantity-product">{{ $item->quantity }}</label><br></br>
                <button id="id-btn-buy" class="btn-buy">Buy</button><br></br>
            </div>
        @endforeach
    </form>

    <button type="submit" class="btn btn-login text-white" id="id-Logout-btn">Logout</button>
</body>
<script src="{{ asset('js/auth/logout.js') }}"></script>

<script src="{{ asset('js/product.js') }}"></script>

</html>
