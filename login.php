<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<title>Login</title>
</head>
  <?php
    $yourdomain = $_SERVER['HTTP_HOST'];
    $yourdomain = preg_replace('/^www\./' , '' , $yourdomain);
    ?>
<body>
<nav class="navbar navbar-expand-sm bg-light navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="http://<?php echo $yourdomain; ?>"><img src="logo.png?3" alt="Logo" style="width:190px;"></a>
  </div>
</nav>
<div class="container mt-3">
<h1> Login to your Calmhost account </h1>
<form method="post" action="/checkuser.php">
<div class="mb-3 mt-3"><label for="uname" class="form-label">Username</label><input type="text" class="form-control" name="uname" id="mod_login_username" size="20" value="<?PHP if (isset($_GET['username'])) { echo $_GET['username']; }?>"></div>
<div class="mb-3 mt-3"><label for="passwd" class="form-label">Password</label><input type="password" class="form-control" name="passwd" size="20" value="<?PHP if (isset($_GET['password'])) { echo $_GET['password']; }?>"></div>
<input type="submit" value="Login" class="btn btn-dark" name="submit">
</form>		
<p>By logging in to free hosting, you accept and agree to iFastNet's <a href="https://ifastnet.com/portal/terms.php">Terms of Service</a></p> 
<p>Don't have an account? <a href="/signup.php">Create one today</a></p>           
</div>

</body>
</html>
