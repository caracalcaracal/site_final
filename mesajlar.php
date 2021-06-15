<?php
if(empty($userid)){ header("Location: ".site_url()); die(); }
$mysrc = $db->query("SELECT * FROM users WHERE id='".$userid."'");
$myuser = $mysrc->fetch(PDO::FETCH_ASSOC);
$follow_src = $db->query("SELECT * FROM follow WHERE followilen_id='".$userid."' AND followen_id='".$userid."'");
$time = date('Y.m.d H:i:s', time());
if($follow_src->rowCount() === 0){ $follow_update = $db->query("INSERT INTO follow (`followilen_id`,`followen_id`,`follow_date`) VALUES ('".$userid."','".$userid."','".$time."')"); } else {  }
$header_height = 'style="height: 130px;"';
@$messages_active = ' class="mobile_menu_active"';
function kisalt($kelime, $str = 10){if (strlen($kelime) > $str){if (function_exists("mb_substr")) $kelime = mb_substr($kelime, 0, $str, "UTF-8").'..';else $kelime = substr($kelime, 0, $str).'..';}return $kelime;}

require view('mesajlar');
