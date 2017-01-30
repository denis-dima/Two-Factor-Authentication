<?php
/**
 * Created by Sevio Solutions.
 * User: Denis DIMA
 * Product: Two-Factor-Authentication
 * Date: 30.01.2017
 * Time: 17:22
 * All rights and copyrights are owned by Sevio Solutions®
 */


require_once 'PHPGangsta/GoogleAuthenticator.inc';

$ga = new PHPGangsta_GoogleAuthenticator();
$secret = $ga->createSecret();
echo "Secret is: " . $secret . "\n\n";



$website = 'http://www.coinzilla.io';
$title = 'coinzilla';
$qrCodeUrl = $ga->getQRCodeGoogleUrl($title, $secret, $website);
?>

<html>
<head></head>
<body>

<img src="<?php echo $qrCodeUrl?>" alt="image">

<form action="verify.php" method="post">
    <input name='secret-code'>
    <input name="secret-key" value="<?php echo $secret ?>" hidden>
    <input type="submit">
</form>
</body>
</html>