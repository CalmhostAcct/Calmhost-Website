<?php
if (isset($_SERVER['HTTP_REFERER']) && $_SERVER['HTTP_REFERER'] === "https://calmhost.us.to/") {
} else {
header('HTTP/1.1 403 Forbidden');
exit("Not Referred");
};
?>
<form method="POST" action="https://ifastnet.com/register.php" id="signup">
<input type="hidden" class="form-control" name="username" size="20" value="<?PHP if (isset($_GET['username'])) { echo htmlspecialchars($_GET['username']); }?>">
<input type="hidden" class="form-control" name="password" size="20" value="<?PHP if (isset($_GET['password'])) { echo htmlspecialchars($_GET['password']); }?>"></div>
<input type="hidden" class="form-control" name="email" size="20" value="<?PHP if (isset($_GET['email'])) { echo htmlspecialchars($_GET['email']); }?>"></div>
<?php 
$id = md5(rand(6000,PHP_INT_MAX));
?>
<input type="hidden" name="id" value="<?PHP if (isset($_GET['id'])) { echo htmlspecialchars($_GET['id']); }?>">
<input type="hidden" class="form-control" name="number" size="20" value="<?PHP if (isset($_GET['number'])) { echo htmlspecialchars($_GET['number']); }?>">
</form>
<script>
document.forms["signup"].submit();
</script>