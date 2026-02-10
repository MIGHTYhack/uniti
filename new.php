<DOCTYPE html>
    <html>
        <link rel="stylesheet" href="style.css">
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
    <br><button class="btn login" onclick="login()">Register</button>
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
</script>













































    </html>