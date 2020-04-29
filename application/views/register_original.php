<!DOCTYPE html>
<html class="no-js">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<!-- Script -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type='text/javascript'>
    function checkPassword(str) {
        // at least one number, one lowercase and one uppercase letter
        // at least six characters
        var re = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/;
        return re.test(str);
    }

    function checkForm() {
        var form_check = document.getElementById('register_form_pass');
        var form_username = document.getElementById('username').innerHTML;
        var form_password = document.getElementById('password').innerHTML;
        var form_address = document.getElementById('address').innerHTML;
        var form_email = document.getElementById('email').innerHTML;
        var form_phone_no = document.getElementById('phone_no').innerHTML;

        if (form_username.length == 0 ||
            form_password.length == 0 ||
            form_address.length == 0 ||
            form_email.length == 0 ||
            form_phone_no.length == 0) {
            form_check.innerHTML = "There are still unfilled details";
        }
        if (checkPassword(form_password)) {
            form_check.innerHTML = "Password too weak, requires at least one number, one lowercase and one uppercase letter and at least six characters";
        } else {
            form_check.innerHTML = "";
        }
    }


        
</script>


<body>
    <div class="w3-content w3-container w3-padding-64" id="login">
        <form method="POST" action="/index.php/start/">

            <br>
            Username:
            <input type="text" name="username" size="20" class="content" id="username" /><br>
            Password:
            <input type="password" name="password" size="20" class="content" id="password" /><br>
            Address:
            <input type="address" name="address" size="20" class="content" id="address" /><br>
            Email:
            <input type="email" name="email" size="20" class="content" id="email" />
            <br>
            Phone Number:
            <input type="phone_no" name="phone_no" size="20" class="content" id="phone_no" /><br><br>

            <input type="submit" value="Register" name="submit" class="content" id="submit-btn" />
        </form>

    </div>

    <p id=register_form_pass></p>



</body>

</html>