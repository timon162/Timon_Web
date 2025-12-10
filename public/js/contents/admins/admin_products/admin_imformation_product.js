$(".number-row-select").on("change", function (e) {
    e.preventDefault();
    $postData = {
        limit: $(this).val(),
    };

    $.ajax({
        type: "POST",
        url: "/post-limit-product",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        data: $postData,
        success: function (res) {
            let html = "";
            res.forEach((element, index) => {
                html += `
                <tr id="id-product" data-id="${element.id}">
                    <td> ${index + 1}</td>
                    <td> ${element.name_product}</td>
                    <td>
                        <div class="img-infor-product-zone">
                            <img src=" ${
                                element.image
                            }"class="img-infor-product">
                        </div>
                    </td>
                    <td> ${element.code_product}</td>
                    <td> ${element.price}</td>
                    <td> ${element.quantity}</td>
                    <td>Voucher sản phẩm</td>
                    <td>
                         <div class="button-infor-product-zone">
                    <a class="show-detail-product" 
                       data-id="${element.id}"
                       href="/admin/detail-product/${element.id}">
                        Xem chi tiết
                    </a>

                    <a class="update-detail-product" 
                       data-id="${element.id}">
                        Cập nhật
                    </a>

                    <a class="delete-detail-product" 
                       data-id="${element.id}">
                        Xóa
                    </a>
                    </td>
                    </tr>`;
            });
            $(".detail-items").html(html);
        },
    });
});
