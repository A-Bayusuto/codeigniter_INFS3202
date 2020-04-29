
function checkForm() {
    // Fetching values from all input fields and storing them in variables.
    var name = document.getElementById("username1").value;
    var password = document.getElementById("password1").value;
    var email = document.getElementById("email1").value;
    var address = document.getElementById("address1").value;
    var phone_no = document.getElementById("phone_no1").value;

    //Check input Fields Should not be blanks.
    if (name == '' || password == '' || email == '' || website == '') {
        alert("Fill All Fields");
    } else {
        //Notifying error fields
        var username1 = document.getElementById("username");
        var password1 = document.getElementById("password");
        var email1 = document.getElementById("email");
        var address = document.getElementById("address");
        var phone_no = document.getElementById("phone_no");
        //Check All Values/Informations Filled by User are Valid Or Not.If All Fields Are invalid Then Generate alert.
        if (username1.innerHTML == 'Must be 3+ letters' || password1.innerHTML == 'Password too short' || email1.innerHTML == 'Invalid email' ||
            address.innerHTML == 'Invalid address' || phone_no.innerHTML == 'Invalid phone no') {
            alert("Fill Valid Information");
        } else {
            //Submit Form When All values are valid.
            document.getElementById("myForm").submit()
        }
    }
}
// AJAX code to check input field values when onblur event triggerd.
function validate(field, query) {
    console.log("called validation");
    var xmlhttp;
    if (window.XMLHttpRequest) { // for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else { // for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    console.log('xml is : ');
    console.log(xmlhttp);

    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState != 4 && xmlhttp.status == 200) {
            console.log("inside if");
            document.getElementById(field).innerHTML = "Validating.."
        } else if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            console.log("inside else if");
            document.getElementById(field).innerHTML = xmlhttp.responseText;
        } else {
            console.log("inside else");
            document.getElementById(field).innerHTML = "Error Occurred. <a href=''>Reload Or Try Again</a> the page.";
        }
    }
    xmlhttp.open("GET", "validation.php?field=" + field + "&query=" + query, false);
    xmlhttp.send();
}
