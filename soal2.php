<?php 

function validasi($username, $password) {
    if (preg_match("/[a-z][_]/", $username) AND strlen($username) == 8) 
    {
        echo 'Username is true';
    }
    else {
        echo 'Username is false';
    }

    echo '<br>';

    if (preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8}$/', $password)) {
        echo 'Password is true';
    }
    else {
        echo 'Password is false';
    }
}

validasi('solo_aba', 'wsxE9##s');

?>