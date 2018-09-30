<?php
    if(isset($_POST['loginButton'])) {
        echo "Login was pressed";
    }
    if(isset($_POST['signup'])) {
        echo "Register was pressed";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Spotify</title>
</head>
<body>
    <div id="inputContainer">
        <form action="register.php" id="loginForm" method="POST">
            <h2>Login to your account</h2>
            <div>
                <label for="loginUsername">Username: </label>
                <input type="text" id="loginUsername" name="loginUsername" placeholder="Username" required>
            </div>
            <div>
                <label for="loginPassword">Password:  </label>
                <input type="text" id="loginPassword" name="loginPassword" type="password" placeholder="Password" required>
            </div>
                <button type="submit" name="loginButton">Login</button>
        </form>

        <form action="register.php" id="registerForm" method="POST">
            <h2>Create your free account</h2>
            <div>
                <label for="registerUsername">Username: </label>
                <input type="text" id="registerUsername" name="registerUsername" placeholder="Username" required>
            </div>
            <div>
                <label for="firstName">First Name: </label>
                <input type="text" id="firstName" name="firstName" placeholder="First Name" required>
            </div>
            <div>
                <label for="lastName">Last Name: </label>
                <input type="text" id="lastName" name="lastName" placeholder="Last Name" required>
            </div>
            <div>
                <label for="registerEmail">Email: </label>
                <input type="text" id="registerEmail" name="registerEmail" placeholder="Email" required>
            </div>
            <div>
                <label for="registerPassword">Password:  </label>
                <input type="text" id="registerPassword" name="registerPassword" type="password" placeholder="Password" required>
            </div>
            <div>
                <label for="confirmPassword">Confirm Password:  </label>
                <input type="text" id="confirmPassword" name="confirmPassword" type="password" placeholder="Confirm Password" required>
            </div>
                <button type="submit" name="signup">Register</button>
        </form>
    </div>
</body>
</html>