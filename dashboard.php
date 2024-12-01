<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<title>Dashboard</title>
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
<?php
session_start();
require_once 'api-client.php';
$vpClient = new VistapanelApi();
$vpClient->setCpanelUrl('https://cpanel.calmhost.ftp.sh');
$vpClient->login($_SESSION['username'], $_SESSION['password']);
$stats = $vpClient->getUserStats();

if (isset($_SESSION['username'])) {
    echo '<h1>Client Area for '.$_SESSION['username'].'!</h1>';
    echo '<p>Welcome to your Calmhost control panel!</p>';
    echo '<h2>Website Management</h2>';
    echo '<form method="post">
    <input type="hidden" id="mod_login_username" name="uname" value="'.$_SESSION['username'].'">
    <input type="hidden" id="mod_login_password" name="passwd" value="'.$_SESSION['password'].'">
    <input type="hidden" id="language" name="language" value="English">
    <input type="submit" id="cpanel" value="Control Panel" class="btn btn-dark" formaction="https://cpanel.'.$yourdomain.'/login.php">
    </form>';
    echo '<br>';
    echo '<a href="'.$vpClient->getSoftaculousLink().'"><button type="button" class="btn btn-dark">Apps Installer</button></a>';
    echo "<br><hr>";
    echo '<h2>PHP</h2>';
    echo '<a href="/phpinfo.php"><button type="button" class="btn btn-dark">PHP Info</button></a>';
    echo '<hr>';
    echo '<h2>Statistics</h2>';
    echo '<button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Open my stats
</button>';
echo '
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">My Statistics</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <ul class="list-group">';
foreach ($stats as $stat => $value) {
  echo '<li class="list-group-item">' . htmlspecialchars($stat, ENT_QUOTES, 'UTF-8') . " " . htmlspecialchars($value, ENT_QUOTES, 'UTF-8') . "</li>";
}
echo '
        </ul>
      </div>
    </div>
  </div>
</div>';

} else {
    header("Location: /login.php");
}
?>
</div>

</body>
</html>
