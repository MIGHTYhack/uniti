<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>UnitiSchoolPortal
</title>
<link rel="stylesheet" href="style.css?v=5">

<body>

<div class="overlay"></div>

<div class="login-box">
    <div class="logo">
        <img src="logo.png" alt="ILESA Logo">
    </div>

    <h3>Welcome!</h3>

    <div class="error" id="error"></div>

    <label>Username</label>
    <input type="text" id="username" placeholder="Enter username">

    <label>Password</label>
    <div class="password-box">
        <input type="password" id="password" placeholder="Enter password">
        <span class="eye" onclick="togglePassword()">👁</span>
    </div>

    <a class="forgot" href="FORGET.php">Forgot Password ?</a>

    <button class="btn login" onclick="login()">Login</button>
    <button class="btn register" onclick="goRegister()">New Students Registration</button>
</div>

<script>
function togglePassword(){
    const pass = document.getElementById("password");
    pass.type = pass.type === "password" ? "text" : "password";
}

function login(){
    const user = document.getElementById("username").value.trim();
    const pass = document.getElementById("password").value.trim();
    const error = document.getElementById("error");

    if(user === "" || pass === ""){
        error.textContent = "Please fill in all fields";
        return;
    }

    window.location.href = "h.php";
}

function goRegister(){
    window.location.href = "new.php";
}
</script>

</body>
</html>