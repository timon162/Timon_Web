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
        if (res.mess == "undefined") {
            window.location.href = "/login";
        } else {
            window.location.href = "/user-view";
        }
    },
});
