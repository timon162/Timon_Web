$("#id-form-register").on("submit", function (e) {
    e.preventDefault();

    var name = $("#id-name").val();
    var email = $("#id-email").val();
    var pasword = $("#id-password").val();
    var password_confirmation = $("#id-password-confirmation").val();

    $dataPost = {
        name: name,
        email: email,
        password: pasword,
        password_confirmation: password_confirmation,
    };

    $.ajax({
        type: "POST",
        url: "/post-register",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        data: $dataPost,
        success: function (res) {
            Swal.fire({
                title: res.mess,
                text: "Welcome to Timon_Web",
                icon: "success",
            });
        },
        error: function (error) {
            let errors = error.responseJSON.errors;
            for (let filed in errors) {
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: errors[filed][0],
                });
            }
        },
    });
});
