<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="css/login_signup.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <!--<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>-->
    <script src="js/signup.js" type="text/javascript"></script>
    <title>Sign&nbsp;up&nbsp;&bull;&nbsp;Pyrogram</title>
</head>
<main>
    <form action="../signup_check.php" method="post">
        <h1>Pyrogram</h1>
        <div class="input-box">
            <label for="email">Email:</label><br>
            <input type="text" id="email" name="email"><br>
        </div>
        <div class="input-box">
            <label for="full_name">Full Name:</label><br>
            <input type="text" id="full_name" name="full_name"><br>
        </div>
        <div class="input-box">
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username"><br>
        </div>
        <div class="input-box">
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password">
            <button type="button" onclick="">Show</button><br>
        </div>
        <button type="submit" value="signup">Sign Up</button>
    </form>
    <div>
        Already have an account?
        <a href="login.php">Log In</a>
    </div>
</main>
</html>
