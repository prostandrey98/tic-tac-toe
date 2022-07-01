function funcBefore () {
    $("#sub_registr").prop("disabled", true);
}

function funcSuccess (data) {
    document.getElementById("error_login").innerHTML = "";
    document.getElementById("error_password").innerHTML = "";
    document.getElementById("error_confirm_password").innerHTML = "";
    console.log(data);
    if (data == "") {
        window.location.href = '/';
    } else {
        var error = data.split(': ')[0];
        var index = data.split(': ')[1];
        document.getElementById("error_"+index).innerHTML = error;
    }
    $("#sub_registr").prop("disabled", false);
}

$(document).ready (function () {
    $("#sub_registr").bind("click", function () {
        $.ajax ({
            url: "check_registr",
            type: "POST",
            data: ({login: $("#login").val(), password: $("#password").val(), confirm_password: $("#confirm_password").val()}),
            dataType: "html",
            beforeSend: funcBefore,
            success: funcSuccess
        });
    });
});
