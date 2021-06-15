<?php
$kadi = addslashes(strip_tags(url(1)));
@$tab = addslashes(strip_tags(url(2)));
$mysrc = $db->query("SELECT * FROM users WHERE id='".$userid."'");
$myuser = $mysrc->fetch(PDO::FETCH_ASSOC);
$src = $db->query("SELECT * FROM users WHERE user_username='".$kadi."'");
$user = $src->fetch(PDO::FETCH_ASSOC);
if($userid == $user["id"]){@$profile_active = ' class="mobile_menu_active"';}
@$action = $_GET["action"];
require view('profil');
