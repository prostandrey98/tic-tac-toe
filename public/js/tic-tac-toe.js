function funcBefore (id) {
    for (i = 0; i < 9; i++){
        var getElement = document.getElementById(i);
        getElement.disabled = true;
        if (id == i){
            getElement.value = "X";
        }
    }
}

function funcSuccess (data) {
    console.log(data);
    if (data == "victory"){
        document.getElementById("h1").innerHTML = "Ты победил!";
        setTimeout(function(){
            location.reload();
        }, 1000);
    }
    else if (data > 8){
        document.getElementById("h1").innerHTML = "Ты проиграл(";
        setTimeout(function(){
            var el = document.getElementById(data-20);
            el.disabled = true;
            el.value = "0";
        }, 300);
        setTimeout(function(){
            location.reload();
        }, 1000);
    }
    else  if (data != ""){
        setTimeout(function(){
            var el = document.getElementById(data);
            el.disabled = true;
            el.value = "0";
            for (i = 0; i < 9; i++){
                var getElement = document.getElementById(i);
                if (data != i && getElement.value == ""){
                getElement.disabled = false;
                }
            }
        }, 300);
    } else {
        var counter = 0;
        for (i = 0; i < 9; i++){
            if (document.getElementById(i).value != ""){
                counter++;
            }
        }
        if (counter == 9){
            document.getElementById("h1").innerHTML = "Ничья так ничья";
            setTimeout(function(){
                location.reload();
            }, 1000);
        }
    }
}

var inputs = document.getElementsByTagName("input");
for (var i = 0; i < inputs.length; i++){
    inputs[i].addEventListener("click", myFunction);
}

function myFunction() {
    $.ajax ({
        url: "play-tic-tac-toe",
        type: "POST",
        data: ({id: this.id, arrayid: [$("#0").val(), $("#1").val(), $("#2").val(), $("#3").val(), $("#4").val(), $("#5").val(), $("#6").val(), $("#7").val(),$("#8").val()]}),
        beforeSend: funcBefore(this.id),
        success: funcSuccess
    });
}