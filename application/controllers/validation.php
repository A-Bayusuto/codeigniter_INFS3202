<?php
$value = $_GET['query'];
$formfield = $_GET['field'];
// Check Valid or Invalid user name when user enters user name in username input field.
if ($formfield == "username") {
    if (strlen($value) < 4) {
        echo "Username must be 3+ letters";
    } else {
        echo "<span>Valid</span>";
    }
}
// Check Valid or Invalid password when user enters password in password input field.
if ($formfield == "password") {
    if (strlen($value) < 6) {
        echo "Password too short";
    } else {
        echo "<span>Strong</span>";
    }
}
// Check Valid or Invalid email when user enters email in email input field.
if ($formfield == "email") {
    if (!preg_match("/([w-]+@[w-]+.[w-]+)/", $value)) {
        echo "Invalid email";
    } else {
        echo "<span>Valid</span>";
    }
}
// Check Valid or Invalid address when user enters address in address input field.
if ($formfield == "address") {
    if (strlen($value) == 0) {
        echo "Invalid address";
    } else {
        echo "<span>Valid</span>";
    }
}
// Check Valid or Invalid phone no when user enters phone no in phone no input field.
if ($formfield == "phone_no") {
    if (strlen($value) == 0) {
        echo "Invalid phone_no";
    } else {
        echo "<span>Valid</span>";
    }
}
?>