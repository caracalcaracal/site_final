<?php
if(empty($userid)){ header("Location: ".site_url()); die(); }
@$notifications_active = ' class="mobile_menu_active"';
$mysrc = $db->query("SELECT * FROM users WHERE id='".$userid."'");
$myuser = $mysrc->fetch(PDO::FETCH_ASSOC);
$upt__N = $db->prepare("UPDATE notifications SET n_light=:a WHERE n_receiver=:b");
$upt__N->execute(array("a"=>"0","b"=>$userid));
require view('bildirimler');
