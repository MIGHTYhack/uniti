<!DOCTYPE html>
<html>
<head>
<title>Course Registration</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
body{
    margin:0;
    height:100vh;
    background:url("bg.jpg") center/cover no-repeat;
    display:flex;
    justify-content:center;
    align-items:center;
.login-box{
        background:#fff;margin:20px;padding:20px;border-radius:6px}
button{padding:10px;background:#20028b;color:#fff;border:none}
.b{padding:10px;background:#20028b;color:#fff;border:none}
</style>
</head>
<body>
<div class="overlay"></div>

<br><div class="login-box">
        <h2>Course Registration</h2>
<br><label><input type="checkbox"> MTH 101</label><br>
<br><label><input type="checkbox"> PHY 101</label><br>
<br><label><input type="checkbox"> CHM 101</label><br>
<br><label><input type="checkbox"> CSC 101</label><br><br>
<br><button onclick="alert('Courses Registered Successfully')">Submit</button>
<a class="b" href="h.php">Back</a></div>
</div>

</body> 
</html>