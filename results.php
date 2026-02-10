<!DOCTYPE html>
<html>
<head>
<title>Results</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css?v=5">
</head>
<body>
<div class="overlay"></div>

<div class="login-box">
  <div class="logo">
<img src="logo.png" alt="ilesha logo">  
<div>
<header><h2>Semester Results</h2></header>
<center>
<div "class="table">
<table border="1">
<tr><th>Course</th><th>Score</th><th>Grade</th></tr>
<tr><td>MTH 101</td><td>78</td><td>A</td></tr>
<tr><td>PHY 101</td><td>65</td><td>B</td></tr>
<tr><td>CHM 101</td><td>59</td><td>C</td></tr>
<tr><td>CSC 101</td><td>82</td><td>A</td></tr>
</table>
</div>
<br>
<div>
    <button class="btn login" onclick="log()">⬅ Back</button>
</div>
</div>
<script>
  function log(){
    window.location.href = "h.php";
}
</script>

</body>
</html>
