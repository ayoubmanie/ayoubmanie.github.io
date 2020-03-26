var a = 1;
var b = [[1,2,3],[4,5,6]];
function f() {
    if (a == 1) {
        document.getElementById("results").style.width = "200px";
        document.getElementById("b").style.marginRight = "120px";
        setTimeout(function() {
            document.getElementById("results").style.opacity = "1";
            document.getElementsByClassName("bar")[0].style.height = "233px";
            document.getElementsByClassName("bar")[1].style.height = "233px";

            setTimeout(function() {
                var x = document.getElementById("metre").value;
                document.getElementById("bar-taille").style.height = x + "px";
                document.getElementById("bar-poids").style.height = "200px";
            }, 300);
        }, 600);

        a++;
    } else {
        var x = document.getElementById("metre").value;
        document.getElementById("bar-taille").style.height = x + "px";
    }

}