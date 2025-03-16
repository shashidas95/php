<?php 
define('username', 'admin');
define('password', '123456');

echo "enter your username:    \n";
$username = readline();
echo "enter your password:    \n";
$password = readline();
if (empty($username) || empty($password)) {
 echo "username or password is blank";
} elseif ($username === username && $password === password) {
 echo " Login successful";
} else {
 echo "Username or password is not valid";
}

?>