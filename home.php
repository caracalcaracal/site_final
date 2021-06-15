<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Ana Sayfa</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <h1>Merhaba Yönetici, <?php echo $_SESSION['name']; ?></h1>

<p><a href="anasayfa.php">Resim Görüntüleme ve Ekleme için TIKLA!</a> </p>


     <a href="logout.php">Çıkış Yap</a>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>