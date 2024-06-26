<?php
$ch = curl_init();
$api_user = "2CtCOfQUy7gaWAqQR6kS83LzyY8qF0lqqCH7qZKUewFrqQRmBYxePhzp64tT1LLG6HItUoxT89J3s8VoPJFZO6J84IKZl7aWCi3pIBl3RxMKgTF5WVwcWPJr5FJCJkrYR8qeaJw8QyDRIkNMLNfCzdlovsTzD9S5HBCy7t2ZKuBmJhRQ8dvhNuQFpW0sDHci1KZMGzECs65cxoR08dtPtOi5HoFsxMHHv0AyzH8GT1v3Yk8heBgjxP7fisv0h35";
$api_pass = "UKM3hky53ZTPafIOztRMOXGtW2LTbDILZkfPSAnBk3D42IK27L1CPpwnlXCjHopmd8UE0YbVe8Vo3GxfGQLYJ1SNb1hSn5TquAE0emdQMfuYpNfSDK1we66hINTkayW8o3nv2VEUb3a2XUObZjhfjrHEFylWtUyMQUU4O0AOOntL0gaZD5164VkmFZF3yZzzUbOqeyG6ECC8aeIWT3EJ41rCn5il0T2zd7pMxLRt3DwwvZcSiJwQKfc2EwZ2djN";
curl_setopt($ch, CURLOPT_URL, 'http://panel.myownfreehost.net/json-api/createacct.php');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "username=" . $_POST['username'] . "&password=" . $_POST['password'] . "&contactemail=" . $_POST['email'] . "&domain=" . $_POST['username'] . ".calmhost.ftp.sh&plan=Ads");
curl_setopt($ch, CURLOPT_USERPWD, $api_user . ':' . $api_pass);

$headers = array();
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
echo($result);
$json = json_decode($result)
$vpusername = $json['vpusername'];
$package = $json['package'];
echo "<h1>Free Hosting Account Details</h1>"
echo "VistaPanel Username: " . $vpusername . "<br>";
echo "VistaPanel Password: " . $_POST['password'] . "<br>";

if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);
?>