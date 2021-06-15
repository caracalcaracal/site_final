<div class="content">

<div class="box-">
<h1>
<?=$lang["sb_photos"]?>
</h1>
</div>

<div class="clear" style="height: 10px;"></div>
<?php
$sayfada = 10;
 
$sorgu = $db->query("SELECT COUNT(*) AS toplam FROM post");
$sonuc = $sorgu->fetch(PDO::FETCH_ASSOC);
$toplam_icerik = $sonuc['toplam'];
 
$toplam_sayfa = ceil($toplam_icerik / $sayfada);
 
$sayfa = isset($tab) ? (int) $tab : 1;
 
if($sayfa < 1) $sayfa = 1; 
if($sayfa > $toplam_sayfa) $sayfa = $toplam_sayfa; 
 
$limit = ($sayfa - 1) * $sayfada;
$sorgu = $db->query('SELECT * FROM post ORDER BY post_id DESC LIMIT ' . $limit . ', ' . $sayfada);
?>
<div class="table">
<table>
<tbody>
	<?php while($photo = $sorgu->fetch(PDO::FETCH_ASSOC)){ $puser_src = $db->query("SELECT * FROM users WHERE id='".$photo["post_kid"]."'"); $puser = $puser_src->fetch(PDO::FETCH_ASSOC) ?>
    <tr>
        <td>
            <a href="#" class="title">
                <img style="border-radius: 6px;height: 50px;" src="<?=site_url()?>uploads/media/200x200/<?=$photo["post_url"]?>">
            </a>
            <div class="magic-links">
                <a href="#" class="admin_photo_edit_ajax" data-id="<?=$photo["post_id"]?>" data-user-id="<?=$photo["post_kid"]?>" data-content="<?=$photo["post_content"]?>" data-url="<?=$photo["post_url"]?>"><?=$lang["edit"]?></a> | <a href="#" class="photo_delete trash" data-id="<?=$photo["post_id"]?>"><?=$lang["delete"]?></a> | <a target="_blank" href="<?=site_url()?>post/<?=$photo["post_pid"]?>"><?=$lang["view"]?></a>
            </div>
        </td>
        <td class="hide">
            <a href="#"><?=$puser["user_username"]?></a>
        </td>
        <td>
            <span class="date"><?=$photo["post_date"]?></span>
        </td>
    </tr>
	<?php } ?>
</tbody>
</table>
</div>

<div class="pagination">
<ul>
<?php
$sayfa_goster = 11;
 
$en_az_orta = ceil($sayfa_goster/2);
$en_fazla_orta = ($toplam_sayfa+1) - $en_az_orta;
 
$sayfa_orta = $sayfa;
if($sayfa_orta < $en_az_orta) $sayfa_orta = $en_az_orta;
if($sayfa_orta > $en_fazla_orta) $sayfa_orta = $en_fazla_orta;
 
$sol_sayfalar = round($sayfa_orta - (($sayfa_goster-1) / 2));
$sag_sayfalar = round((($sayfa_goster-1) / 2) + $sayfa_orta); 
 
if($sol_sayfalar < 1) $sol_sayfalar = 1;
if($sag_sayfalar > $toplam_sayfa) $sag_sayfalar = $toplam_sayfa;
 
if($sayfa != 1) echo '<li><a href="'.site_url("admin/fotograflar/").($sayfa-1).'"><i class="fa fa-angle-left"></i></a></li>';
 
for($s = $sol_sayfalar; $s <= $sag_sayfalar; $s++) {
    if($sayfa == $s) {
        echo '<li class="active"><a>'.$s.'</a></li>';
    } else {
        echo '<li><a href="'.site_url("admin/fotograflar/").$s.'">'.$s.'</a></li>';
    }
}
 
if($sayfa != $toplam_sayfa) echo '<li><a href="'.site_url("admin/fotograflar/").($sayfa+1).'"><i class="fa fa-angle-right"></i></a></li>';
?>
</ul>
</div>

</div>