<?php 
    // This example PHP code shows how to store user data and retrieve it later.
    
    function saveUserData($username, $password) {
        if (file_exists('users.txt')) {
            file_put_contents('users.txt', "$username:$password\n", FILE_APPEND);
        } else {
            file_put_contents('users.txt', "$username:$password");
        }
    }

    $user = "user123";
    saveUserData($user, "password");

    if (file_exists('users.txt')) {
        $userData = file_get_contents('users.txt');
        echo "User data saved to 'users.txt'.\n\n";
        echo "Username: $user, Password: $userData\n";
    } else {
        echo "No user data found.\n";
    }
?>
