$(".btn-buy").on("click", function (e) {
    e.preventDefault();
    let parent = $(this).closest(".product-item");

    let name = parent.find(".name-product").text();
    let price = parseInt(parent.find(".price-product").text());
    let quantity = parseInt(parent.find(".quantity-product").text());
    let productId = parent.data("id");
    $postData = {
        id: productId,
        name: name,
        price: price,
        quantity: quantity,
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
            parent.find(".quantity-product").text(res.data.quantity);
        },
        error: function (error) {
            console.log(error.responseJSON.errors);
        },
    });
});
