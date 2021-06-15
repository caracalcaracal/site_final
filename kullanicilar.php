<div class="content">

<div class="box-">
<h1>
<?=$lang["sb_all_users"]?>
<a href="#" class="admin_add_ajax btn_active"><?=$lang["sb_add_user"]?></a>
</h1>
</div>

<div class="clear" style="height: 10px;"></div>
<?php
$sayfada = 10;
 
$sorgu = $db->query("SELECT COUNT(*) AS toplam FROM users");
$sonuc = $sorgu->fetch(PDO::FETCH_ASSOC);
$toplam_icerik = $sonuc['toplam'];
 
$toplam_sayfa = ceil($toplam_icerik / $sayfada);
 
$sayfa = isset($tab) ? (int) $tab : 1;
 
if($sayfa < 1) $sayfa = 1; 
if($sayfa > $toplam_sayfa) $sayfa = $toplam_sayfa; 
 
$limit = ($sayfa - 1) * $sayfada;
$sorgu = $db->query('SELECT * FROM users ORDER BY id DESC LIMIT ' . $limit . ', ' . $sayfada);
?>
<div class="table">
<table>
<tbody>
	<?php while($user = $sorgu->fetch(PDO::FETCH_ASSOC)){ ?>
    <tr>
        <td>
            <a target="_blank" href="<?=site_url()?>profil/<?=$user["user_username"]?>" class="title">
                <?=$user["user_fullname"]?>
            </a>
            <div class="magic-links">
                <a href="#" class="admin_edit_ajax" data-id="<?=$user["id"]?>" data-username="<?=$user["user_username"]?>" data-fullname="<?=$user["user_fullname"]?>" data-mail="<?=$user["user_mail"]?>" data-type="<?=$user["user_type"]?>" data-verified="<?=$user["user_verified"]?>"><?=$lang["edit"]?></a> | <a href="#" class="user_delete trash" data-id="<?=$user["id"]?>"><?=$lang["delete"]?></a> | <a target="_blank" href="<?=site_url()?>profil/<?=$user["user_username"]?>"><?=$lang["view"]?></a>
            </div>
        </td>
        <td class="hide">
            <a target="_blank" href="<?=site_url()?>profil/<?=$user["user_username"]?>"><?=$user["user_username"]?></a>
        </td>
        <td class="hide">
            <?=$user["user_mail"]?>
        </td>
        <td>
			<?=$user["user_type"]?>
        </td>
        <td>
			<?php if($user["user_verified"] == "1"){ ?>
			<svg class="profile_verified" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 509.604 509.604" style="enable-background:new 0 0 509.604 509.604;" xml:space="preserve"><g><g><path d="M34.262,333.282c8.119,6.75,14.793,15.223,14.143,20.988c-0.382,3.443-0.593,6.943-0.593,10.5    c0,52.393,41.3,94.861,92.24,94.861c6.292,0,12.431-0.65,18.37-1.885c10.002-2.074,21.812,1.941,28.888,9.793    c16.82,18.646,40.803,30.342,67.492,30.342c28.19,0,53.426-13.016,70.342-33.518c6.723-8.146,18.103-11.533,28.22-8.5    c8.166,2.447,16.811,3.768,25.751,3.768c50.939,0,92.24-42.477,92.24-94.861c0-5.861-0.535-11.59-1.549-17.145    c-1.712-9.371,2.85-21.047,10.471-28.363c18.025-17.289,29.328-41.883,29.328-69.242c0-29.787-13.368-56.323-34.263-73.698    c-8.118-6.751-14.793-15.224-14.143-20.99c0.383-3.442,0.593-6.942,0.593-10.5c0-52.393-41.301-94.86-92.24-94.86    c-6.292,0-12.431,0.65-18.369,1.884c-10.002,2.075-21.812-1.941-28.889-9.792c-16.82-18.647-40.803-30.342-67.492-30.342    c-26.688,0-50.671,11.695-67.492,30.342c-7.076,7.841-18.886,11.867-28.888,9.792c-5.938-1.234-12.078-1.884-18.37-1.884    c-50.939,0-92.24,42.477-92.24,94.86c0,5.049,0.392,10.002,1.147,14.832c1.262,8.128-4.447,18.149-12.747,24.681    C14.219,201.663,0,228.887,0,259.583C0,289.37,13.368,315.907,34.262,333.282z M131.475,263.016    c2.046-3.625,7.268-3.672,12.049,0.479l48.119,33.918c2.61,1.588,5.106,2.4,7.506,2.4c4.963,0,8.893-3.576,12.689-7.02    l153.985-154.138c9.629-10.471,18.99-14.162,25.102-10.146c2.82,1.855,4.646,4.647,5.135,7.87    c0.583,3.825-0.756,7.946-3.768,11.599l-185.149,224.91c-2.687,3.26-6.11,5.059-9.629,5.059c-4.179,0-7.965-2.516-10.404-6.895    l-54.344-97.969C130.519,269.422,130.021,265.618,131.475,263.016z" fill="<?=$theme_color?>"></path></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
			<?php } else { ?>
			<svg class="profile_verified" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 509.604 509.604" style="enable-background:new 0 0 509.604 509.604;fill-opacity: .3;" xml:space="preserve"><g><g><path d="M34.262,333.282c8.119,6.75,14.793,15.223,14.143,20.988c-0.382,3.443-0.593,6.943-0.593,10.5    c0,52.393,41.3,94.861,92.24,94.861c6.292,0,12.431-0.65,18.37-1.885c10.002-2.074,21.812,1.941,28.888,9.793    c16.82,18.646,40.803,30.342,67.492,30.342c28.19,0,53.426-13.016,70.342-33.518c6.723-8.146,18.103-11.533,28.22-8.5    c8.166,2.447,16.811,3.768,25.751,3.768c50.939,0,92.24-42.477,92.24-94.861c0-5.861-0.535-11.59-1.549-17.145    c-1.712-9.371,2.85-21.047,10.471-28.363c18.025-17.289,29.328-41.883,29.328-69.242c0-29.787-13.368-56.323-34.263-73.698    c-8.118-6.751-14.793-15.224-14.143-20.99c0.383-3.442,0.593-6.942,0.593-10.5c0-52.393-41.301-94.86-92.24-94.86    c-6.292,0-12.431,0.65-18.369,1.884c-10.002,2.075-21.812-1.941-28.889-9.792c-16.82-18.647-40.803-30.342-67.492-30.342    c-26.688,0-50.671,11.695-67.492,30.342c-7.076,7.841-18.886,11.867-28.888,9.792c-5.938-1.234-12.078-1.884-18.37-1.884    c-50.939,0-92.24,42.477-92.24,94.86c0,5.049,0.392,10.002,1.147,14.832c1.262,8.128-4.447,18.149-12.747,24.681    C14.219,201.663,0,228.887,0,259.583C0,289.37,13.368,315.907,34.262,333.282z M131.475,263.016    c2.046-3.625,7.268-3.672,12.049,0.479l48.119,33.918c2.61,1.588,5.106,2.4,7.506,2.4c4.963,0,8.893-3.576,12.689-7.02    l153.985-154.138c9.629-10.471,18.99-14.162,25.102-10.146c2.82,1.855,4.646,4.647,5.135,7.87    c0.583,3.825-0.756,7.946-3.768,11.599l-185.149,224.91c-2.687,3.26-6.11,5.059-9.629,5.059c-4.179,0-7.965-2.516-10.404-6.895    l-54.344-97.969C130.519,269.422,130.021,265.618,131.475,263.016z" fill="#000000"></path></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
			<?php } ?>
        </td>
		<?php } ?>
    </tr>
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
 
if($sayfa != 1) echo '<li><a href="'.site_url("admin/kullanicilar/").($sayfa-1).'"><i class="fa fa-angle-left"></i></a></li>';
 
for($s = $sol_sayfalar; $s <= $sag_sayfalar; $s++) {
    if($sayfa == $s) {
        echo '<li class="active"><a>'.$s.'</a></li>';
    } else {
        echo '<li><a href="'.site_url("admin/kullanicilar/").$s.'">'.$s.'</a></li>';
    }
}
 
if($sayfa != $toplam_sayfa) echo '<li><a href="'.site_url("admin/kullanicilar/").($sayfa+1).'"><i class="fa fa-angle-right"></i></a></li>';
?>
</ul>
</div>

</div>