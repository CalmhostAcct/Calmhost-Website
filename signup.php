<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<title>Signup</title>
</head>
  <?php
    $yourdomain = "calmhost.ftp.sh";
    $yourdomain = preg_replace('/^www\./' , '' , $yourdomain);
    ?>
<body>
<nav class="navbar navbar-expand-sm bg-light navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="http://<?php echo $yourdomain; ?>"><img src="logo.png?3" alt="Logo" style="width:190px;"></a>
  </div>
</nav>

<div class="container mt-3">
<h1> Sign up for a Calmhost account </h1>
<form method="get" action="https://calmhost.ftp.sh/signupforwarder.php">
<div class="mb-3 mt-3"><label for="username" class="form-label">Subdomain Name</label><div class="input-group"><input type="text" class="form-control" name="username" size="20" value="<?PHP if (isset($_GET['username'])) { echo htmlspecialchars($_GET['username']); }?>"><span class="input-group-text">.<?php echo $yourdomain; ?></span></div></div>
<div class="mb-3 mt-3"><label for="password" class="form-label">Password</label><input type="password" class="form-control" name="password" size="20" value="<?PHP if (isset($_GET['password'])) { echo htmlspecialchars($_GET['password']); }?>"></div>
<div class="mb-3 mt-3"><label for="email" class="form-label">Email</label><input type="email" class="form-control" name="email" size="20" value="<?PHP if (isset($_GET['email'])) { echo htmlspecialchars($_GET['email']); }?>"></div>
<?php 
$id = md5(rand(6000,PHP_INT_MAX));
?>
<input type="hidden" name="id" value="<?PHP echo $id; ?>">
<div class="mb-3 mt-3"><img width="250px" height="90px" name="captcha" class="rounded" style="filter: grayscale(100%);" src="https://ifastnet.com/image.php?id=<?php echo $id; ?>"></div>
<div class="mb-3 mt-3"><label for="number" class="form-label">Code</label><input type="text" class="form-control" name="number" size="20" value="<?PHP if (isset($_GET['number'])) { echo htmlspecialchars($_GET['number']); }?>"></div>
<input type="submit" value="Register" class="btn btn-dark" name="submit">
</form>		
<p>By signing up for our free hosting, you accept and agree to iFastNet's <a href="https://ifastnet.com/portal/terms.php">Terms of Service</a></p>
<p>Alerady have an account? <a href="/login.php">Login to your existing account</a></p>            
</div>

</body>
</html>
