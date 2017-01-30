<?php
/**
 * Created by Sevio Solutions.
 * User: Denis DIMA
 * Product: Two-Factor-Authentication
 * Date: 30.01.2017
 * Time: 17:23
 * All rights and copyrights are owned by Sevio Solutions®
 */

require_once 'PHPGangsta/GoogleAuthenticator.inc';

$ga = new PHPGangsta_GoogleAuthenticator();


$checkResult = $ga->verifyCode($_POST['secret-key'], $_POST['secret-code'], 2);    // 2 = 2*30sec clock tolerance
if ($checkResult) {
    echo 'OK';
} else {
    echo 'FAILED';
}