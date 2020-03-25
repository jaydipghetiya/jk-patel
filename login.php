<?php
require_once __DIR__ . '/vendor/autoload.php'; // change path as needed
if(!session_id()) {
    session_start();
}
$fb = new Facebook\Facebook([
  'app_id' => '132247014828835',
  'app_secret' => '241df62f345ae9ac79a56e4fa3d33352',
  'default_graph_version' => 'v2.10',
  ]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['email']; // Optional permissions
$loginUrl = $helper->getLoginUrl('http://localhost/facebook/fb-callback.php', $permissions);

echo '<a href="' . $loginUrl . '">Log in with Facebook jkjlkjlkj!</a>';
 ?>