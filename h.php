<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css?v=5">

<body>

<div class="login-box">
    <div class="logo">
        <img src="logo.png" alt="ILESA Logo">
    </div>
    <h2>Dashboards</h2>
    <button class="btn login" onclick="course()">Courses registration</button>
    <button class="btn login" onclick="view()">View Results</button>
    <button class="btn login" onclick="payments()">Payments</button>
    <button class="btn login" onclick="log()">log out</button>
</div>
</div>
<script>
    function course(){
 window.location.href = "courses.php";}
        function view(){
 window.location.href = "results.php";}
         function payments(){
 window.location.href = "payments.php";}
         function log(){
 window.location.href = "index.php";}
</script>
</body>                        
