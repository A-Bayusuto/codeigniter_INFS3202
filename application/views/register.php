<!DOCTYPE html>
<html>

<head>
    <script>
        console.log(window.location.origin);
    </script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/script.js"></script>

</head>

<body>
    <div id="mainform">
        <div class="innerdiv">
            <!-- Required Div Starts Here -->
            <h2>User Registration</h2>
            <form action="/index.php/index/" id="myForm" method='post' name="myForm">
                <h3>Fill Your Information!</h3>
                <table>
                    <tr>
                        <td>Username</td>
                        <td><input id='username1' name='username' type='text'> </></td>
                        <td>
                            <div id='username'></div>
                        </td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input id='password1' name='password' onblur="validate('password', this.value)" type='password'></td>
                        <td>
                            <div id='password'></div>
                        </td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td><input id='address1' name='address' onblur="validate('address', this.value)" type='text'></td>
                        <td>
                            <div id='address'></div>
                        </td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input id='email1' name='email' onblur="validate('email', this.value)" type='text'></td>
                        <td>
                            <div id='email'></div>
                        </td>
                    </tr>
                    <tr>
                        <td>Phone No</td>
                        <td><input id='phone_no1' name='phone_no' onblur="validate('phone_no', this.value)" type='text'></td>
                        <td>
                            <div id='phone_no'></div>
                        </td>
                    </tr>
                </table>
                <input onclick="checkForm()" type='button' value='Submit'>
            </form>
        </div>

</body>

<script>
    var username1 = document.getElementById("username1");
    var password1 = document.getElementById("password1");
    var email1 = document.getElementById("email1");
    var address = document.getElementById("address1");
    var phone_no = document.getElementById("phone_no1");

    username1.addEventListener("onClick", myFocusFunction());
    username1.addEventListener("focusout", checkUsername());

    function myFocusFunction() {
        username1.style.backgroundColor = "yellow";
    }

    function checkUsername() {

        console.log("script is called for username")
        var username = username1.innerHTML.text;
        console.log("entered value : " + username);
        $.ajax({
            url: '<?= base_url() ?>index.php/index/validation',
            method: 'post',
            data: {
                username: username,
                formfield: "username"
            },
            dataType: 'json',
            success: function(response) {
                var len = response.length;
                $('#username').text('');
                if (len > 0) {
                    // Read values
                    var unameResponse = response[0].username;
                    $('#username').text(unameResponse);
                }
            }
        });
    };
</script>



</html>