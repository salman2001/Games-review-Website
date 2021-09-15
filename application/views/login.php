<html>
<head>

<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Link CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
    <div class="navbar-header">
          <a class="navbar-brand" href="#">Game Reviews</a>
    </div>
<ul class="nav navbar-nav">
    <li><a href="<?php echo base_url()?>index.php/home">Home</a></li>
</ul>
</div>
</nav>
</nav>
</head>
<body>
<style>
form {
  border: 3px solid #f1f1f1;
}
/* Full-width inputs */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}
/* Add a hover effect for buttons */
button:hover {
  opacity: 0.8;
}
/* Add padding to containers */
.container {
  padding: 16px;
}
/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
    display: block;
    float: none;
  }
}
</style>
<!--login form with unique ids-->
<div>
  <div id="formContent">
    <form action="<?php echo base_url("/index.php/login/getuserdetails");?>" method="post">
    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
      <button type="submit">Login</button>
    </div>
    </form>
  </div>
</div>
</body>
</html>