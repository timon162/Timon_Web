<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>Product</title>
</head>

<body>
    <form id="id-form-add-product">
        <h2>Thêm Sản Phẩm</h2><br></br>
        <label>tên sản phẩm</label>
        <input type="text" id="id-name-product" placeholder="nhập tên sản phẩm"><br></br>
        <label>giái sản phẩm</label>
        <input type="text" id="id-price-product" placeholder="nhập giái sản phẩm"><br></br>
        <label>số lượng sản phẩm</label>
        <input type="text" id="id-quantity-product" placeholder="nhập số lượng sản phẩm"><br></br>
        <button type="submit">ADD PRODUCT</button>
    </form>
    <script src={{ asset('js/products/add_product.js') }}></script>
</body>

</html>
