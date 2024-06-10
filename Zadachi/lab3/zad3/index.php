<?php
$users = array(
    "valentin" => "1234",
    "jivko" => "p1234",
    "matio" => "dinev"
);

if(isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if(array_key_exists($username, $users) && $users[$username] === $password) {
        echo "Dobre doshli, $username!";
    } else {
        echo "Potrebiltelskoto ime/parola e greshno.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>ВХОД</title>
</head>
<body>
    <h2>ВХОД</h2>
    <form method="post" action="">
        <label for="username">Potrebitelsko ime:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Parola:</label>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="ВХОД">
    </form>
</body>
<p>username: matio </p>
<p>password: dinev </p>
</html>
