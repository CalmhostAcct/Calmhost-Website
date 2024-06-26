<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<title>Home</title>
</head>
  <?php
    $n = "Calmhost";
    $yourdomain = $_SERVER['HTTP_HOST'];
    $yourdomain = preg_replace('/^www\./' , '' , $yourdomain);
    ?>
<body>
<nav class="navbar navbar-expand-sm bg-light navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="http://<?php echo $yourdomain; ?>"><img src="logo.png?3" alt="Logo" style="width:190px;"></a>
  </div>
</nav>

<div class="container-fluid p-5 bg-dark text-white text-center" style="background: black;">
  <h1>Welcome to <?php echo $n; ?></h1>
  <p>Create free sites with <?php echo $n; ?>.</p>
  <a href="/signup.php"><button type="button" class="btn btn-light">Create an account</button></a>
  <a href="/login.php"><button type="button" class="btn btn-light">Sign in</button></a>
</div>
	<div class="container pt-5">
<div class="alert alert-primary" role="alert">
  We are moved to calmhost.us.to and switched servers for better experience.
</div>
<div class="container pt-5">
    <center>
        <div class="card my-3">
            <div class="card-body text-center">
                <h4 class="card-title">Free hosting specifications</h4>
                <p class="card-text"><?php echo $n; ?> has excellent specifications.</p>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">5 GB storage space &amp; 100 GB bandwidth</li>
                    <li class="list-group-item">400 Databases &amp; Scripting</li>
                    <li class="list-group-item">50 Addon domains, Parked Domains, Sub-Domains</li>
                    <li class="list-group-item">Powered by iFastNet Servers</li>
                    <li class="list-group-item">Apps Installer</li>
                    <li class="list-group-item">SQL & SQL Admin </li>
                    <li class="list-group-item">Free control panel</li>
                </ul>
            </div>
        </div>
    </center>
</div>
   
       
        
        <center>Copyright © 2024 <a href="https://sites.google.com/view/calmmount">Calmhost Owner</a>. Powered by <a href="http://ifastnet.com">iFastNet</a></center>

</body>
</html>
