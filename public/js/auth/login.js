let token = localStorage.getItem("token");
$postToken = {
    remember_token: token,
};

$.ajax({
    method: "POST",
    url: "/",
    data: $postToken,
    headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
    success: function (res) {
        if (res.mess == "success") {
            window.location.href = "/admin";
        }
    },
});

$("#id-form-login").on("submit", function (e) {
    e.preventDefault();
    var email = $("#id-email").val();
    var password = $("#id-password").val();
    var is_remember = $("#remember").is(":checked") ? 1 : 0;

    $dataPost = {
        email: email,
        password: password,
        is_remember: is_remember,
    };

    $.ajax({
        type: "POST",
        url: "post-login",
        data: $dataPost,
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        success: function (res) {
            localStorage.setItem("token", res.token);
            window.location.href = "/admin";
        },
        error: function (error) {
            let errors = error.responseJSON.errors;
            for (let field in errors) {
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: errors[field][0],
                });
            }
        },
    });
});
