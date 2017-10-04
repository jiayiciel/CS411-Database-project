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