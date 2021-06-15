<div class="content">
	
<div class="box-">
<h1><?=$lang["sb_design"]?></h1>
</div>
	
<div class="message success box-" style="background: #FFFFFF;border-radius: 4px;display: none;">
  Değişiklikler başarıyla güncellendi. <a href="<?=site_url()?>">Siteye Git</a>
  </div>
	
<div class="clear" style="height: 10px;"></div>	

<div class="box-">
<form class="form label">
<ul>
<li>
  <label for="title">Logo</label>
  <div class="form-content">
      <input name="theme_logo" value="<?=$setting["theme_logo"]?>" type="text"/>
	  <p>Önerilen boyut 100x30</p>
  </div>
</li>
<li>
  <label for="title">Favicon</label>
  <div class="form-content">
      <input name="theme_favicon" value="<?=$setting["theme_favicon"]?>" type="text"/>
	  <p>Önerilen boyut 64x64</p>
  </div>
</li>
<li>
  <label for="title"><?=$lang["nb_theme_color"]?></label>
  <div class="form-content">
      <input name="theme_color" value="<?=$setting["theme_color"]?>" type="text"/>
  </div>
</li>
<li>
  <label for="title"><?=$lang["nb_theme_photo"]?></label>
  <div class="form-content">
      <input name="theme_photo" value="<?=$setting["theme_photo"]?>" type="text"/>
	  <p>
        <?=$lang["theme_photo_content"]?>
      </p>
  </div>
</li>
<li class="submit">
  <button type="submit" class="design_save_button admin_submit btn_active"><?=$lang["save_changes"]?></button>
</li>
</ul>
</form>
</div>

<div class="clear" style="height: 10px;"></div>



</div>