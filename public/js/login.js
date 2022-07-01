function funcBefore () {
    $("#sub_auth").prop("disabled", true);
}

function funcSuccess (data) {
    document.getElementById("error_login").innerHTML = "";
    document.getElementById("error_password").innerHTML = "";
    console.log(data);
    if (data == "") {
        window.location.href = '/';
    } else {
        var error = data.split(': ')[0];
        var index = data.split(': ')[1];
        document.getElementById("error_"+index).innerHTML = error;
    }
    $("#sub_auth").prop("disabled", false);
}

$(document).ready (function () {
    $("#sub_auth").bind("click", function () {
        $.ajax ({
            url: "/check_auth",
            type: "POST",
            data: ({login: $("#login").val(), password: $("#password").val()}),
            dataType: "html",
            beforeSend: funcBefore,
            success: funcSuccess
        });
    });
});
