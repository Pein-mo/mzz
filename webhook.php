<?php 
error_reporting(1);
$token = "mozhenzhu";
$path="/www/wwwroot/git.mo1120.com";

$json = json_decode(file_get_contents('php://input'), true);
 
if (empty($json['token']) || $json['token'] !== $token) {
    exit('error request');
}

echo shell_exec("cd {$path} && /usr/bin/git reset --hard origin/master && /usr/bin/git clean -f && /usr/bin/git pull 2>&1");

?>