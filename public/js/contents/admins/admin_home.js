$(".wrap-add-product").on("submit", function (e) {
    var imageProduct = $("#add-image").val();
    var nameProduct = $("#add-name-product").val();
    var quantityProduct = $("#add-quantity-product").val();
    var priceProduct = $("#add-price-product").val();

    $postData = {
        imageProduct: imageProduct,
        nameProduct: nameProduct,
        quantityProduct: quantityProduct,
        priceProduct: priceProduct,
    };

    console.log($postData);

    $.ajax({
        type: "POST",
        url: "/post-product",
        data: $postData,
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        success: function (res) {
            console.log(res);
        },
        error: function (errors) {
            console.log(errors.responseJSON.errors);
        },
    });
});
