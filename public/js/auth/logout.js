let token = localStorage.getItem("token");
$postToken = {
    logout_token: token,
};

$("#id-Logout-btn").on("click", function (e) {
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: "/post-logout",
        data: $postToken,
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        success: function () {
            localStorage.removeItem("token");
            window.location.href = "/";
        },
        error: function (error) {
            let errors = error.responseJSON.errors;
            console.log(errors);
        },
    });
});
