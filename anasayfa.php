
   
   
  <div class="content">

<div class="box-container">
<div class="box" id="div-0">
<h3>Hoşgeldiniz <?=$setting["name"]?> <?=$lang["admin_panel"]?></h3>
<div class="box-content">
<p>
<?php
$user_srcr = $db->query("SELECT * FROM users");
$photo_srcr = $db->query("SELECT * FROM post");
$like_srcr = $db->query("SELECT * FROM likes");
?>
<ul class="box_statics">
<li><i class="el el-user"></i><br/><span><b><?=$user_srcr->rowCount()?></b> <?=$lang["total_users"]?></span></li>
<li><i class="el el-photo"></i><br/><span><b><?=$photo_srcr->rowCount()?></b> <?=$lang["total_photos"]?></span></li>
<li><i class="el el-heart"></i><br/><span><b><?=$like_srcr->rowCount()?></b> <?=$lang["total_likes"]?></span></li>
</ul>
</p>
</div>
</div>
</div>

<div class="box-container container-50">
<div class="box" id="div-2">
<h3><?=$lang["recent_activities"]?></h3>
<div class="box-content">
<div class="bildirimler_icerik">
<ul>
<?php
$bildirimler_src = $db->query("SELECT * FROM notifications ORDER BY n_id DESC LIMIT 10");
while($bildirim = $bildirimler_src->fetch(PDO::FETCH_ASSOC)){
$n_user_src = $db->query("SELECT * FROM users WHERE id='".$bildirim["n_g"]."'");
$n_user = $n_user_src->fetch(PDO::FETCH_ASSOC);

$n_usera_src = $db->query("SELECT * FROM users WHERE id='".$bildirim["n_receiver"]."'");
$n_usera = $n_usera_src->fetch(PDO::FETCH_ASSOC);

$post_src = $db->prepare("SELECT * FROM post WHERE post_id=:a");
$post_src->execute(array("a"=>$bildirim["n_post"]));
$post = $post_src->fetch(PDO::FETCH_ASSOC);
if($bildirim["n_type"] == "follow"){
?>
<li id="bsil<?php echo $bildirim["n_id"]; ?>"><div>
<a class="bildirimler_icerik_avatar" href="<?=site_url()?><?php echo $n_user["user_username"]; ?>"><img src="<?=site_url()?>uploads/profile_avatar/250x250/<?php echo $n_user["user_avatar"]; ?>"></a><a style="color: #333333;" href="<?=site_url()?><?php echo $n_user["user_username"]; ?>"><i class="bildirimler_icerik_i"><b><?=$n_user["user_fullname"]?></b> takip ediyor <b><?=$n_usera["user_fullname"]?>.</b></i></a>

<a class="bildirimler_icerik_tip" style="background: #718FFF;"><i class="el el-user"></i></a></div></li>
<?php } else if($bildirim["n_type"] == "like"){ ?>
<li>
<div><a class="bildirimler_icerik_avatar" href="<?=site_url()?><?php echo $n_user["user_username"]; ?>"><img src="<?=site_url()?>uploads/profile_avatar/250x250/<?php echo $n_user["user_avatar"]; ?>"></a><a style="color: #333333;" href="<?=site_url()?>post/<?php echo $post["post_pid"]; ?>"><i class="bildirimler_icerik_i"><b><?=$n_user["user_fullname"]?></b> fotoğrafı <b><?=$n_usera["user_fullname"]?></b> beğendi.</i></a>
<a class="bildirimler_icerik_tip" style="background: #FFBC5A;"><i class="el el-heart"></i></a></div></li>
<?php } else { ?>

<?php } ?>
<?php } ?>
</ul>
</div>
</div>
</div>
</div>

<div class="box-container container-50">
<div class="box" id="div-3">
<h3><?=$lang["recent_photos"]?></h3>
<div class="box-content">
<div class="lasted_photo">
<ul>
<?php $photo_src = $db->query("SELECT * FROM post ORDER BY post_id DESC LIMIT 8"); while($photo = $photo_src->fetch(PDO::FETCH_ASSOC)){ ?>
<a href="<?=site_url()?>post/<?=$photo["post_pid"]?>"><li><img src="<?=site_url()?>uploads/media/200x200/<?php echo $photo["post_url"]; ?>"></li></a>
<?php } ?>
</ul>
</div>
</div>
</div>
</div>

</div>