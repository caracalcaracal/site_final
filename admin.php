<?php
$page = addslashes(strip_tags(url(1)));
$tab = addslashes(strip_tags(url(2)));
if(empty($page)){ $page="anasayfa"; }
if(empty($userid)){ header("Location: ".site_url()); die(); }
$mysrc = $db->query("SELECT * FROM users WHERE id='".$userid."'");

if($myuser["user_type"] != "admin"){ header("Location: ".site_url()); die(); }
if($page=="0"){ header("Location: ".site_url()); }
require view('admin');
