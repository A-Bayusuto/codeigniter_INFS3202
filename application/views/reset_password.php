<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
    <div id="mainform">
        <div class="innerdiv">
            <!-- Required Div Starts Here -->
            <h2>User Profile</h2>
            <form action="/index.php/index/" id="myForm" method='post' name="myForm">
                <h3>Your Information!</h3>
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

</html>