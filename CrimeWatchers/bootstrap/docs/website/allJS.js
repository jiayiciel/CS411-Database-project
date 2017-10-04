function displayMovies(str) {
    if (str.includes("@") || str.includes("*")) {
        alert("Name cannot contain special characters like @ or *");
    } else if (str.length == 0) { 
        document.getElementById("cityFound").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
             
            if (this.readyState == 4) {
                document.getElementById("cityFound").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "getTenMovies.php?q=" + str, true);
        xmlhttp.send();
    }
}

function showDiv() {
    alert("This is an advanced functionality!");
}

function insert(str, conf) {
    //alert("How");
    if (str.value.includes("@") || str.value.includes("*")) {
        //alert("Why");
        alert("Name cannot contain special characters like @ or *");
    } else if (str.value.length == 0) {
        //alert("What"); 
        document.getElementById("namesFound").innerHTML = "";
        return;
    } else {
        //alert("Hello");
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {            
            if (this.readyState == 4) {
                document.getElementById("namesFound").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "insertActual.php?q=" + str.value + "&conf=" + conf.value, true);
        xmlhttp.send();
    }
}

function displayMovies1(str) {
    if (str.includes("@") || str.includes("*")) {
        alert("Name cannot contain special characters like @ or *");
    } else if (str.length == 0) { 
        document.getElementById("titleFound").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {            
            if (this.readyState == 4) {
                document.getElementById("titleFound").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "searchAndJoin.php?q=" + str, true);
        xmlhttp.send();
    }
}


