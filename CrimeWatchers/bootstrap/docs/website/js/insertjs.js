function insert(str, conf) {
    alert("Th functionality!");
    if (str.includes("@") || str.includes("*")) {
        alert("Location cannot contain special characters like @ or *");
    } else if (str.length == 0) { 
        document.getElementById("namesFound").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        // xmlhttp.onreadystatechange = function() {
        //     if (this.readyState == 4 && this.status == 200) {
        //         document.getElementById("namesFound").innerHTML = this.responseText;
        //     }
        // };
        xmlhttp.open("GET", "insert.php?q=" + str + "&conf=" + conf, true);
        xmlhttp.send();
    }
}

