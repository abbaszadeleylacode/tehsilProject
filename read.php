<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
		<link rel="stylesheet" href="assets/css/style.css">
		<?php
		include "showDb.php";
		$id=$_GET['id'];
		$sql="SELECT id,name,surname,address,age,sinif_id,ata_adi,sheher,sekil,vesiqe_no,tel_no,code FROM sagird WHERE id=$id";
		$query=mysqli_query($db_connection,$sql);
		$row=mysqli_fetch_assoc($query);
		echo $row['sinif_id'];
		?>
	</head>
	<body>
		<h1 style="color: orange" class="text-center">Şagirdin şəxsi məlumatları</h1>
		<div class="list-group">
			<div class="col-md-10 col-md-offset-2" style="margin-top: 50px;">
			<a href="#" class="list-group-item  "><h4><b>Ad </b> -<?php echo $row['name']; ?></h4></a>
			<a href="#" class="list-group-item  "><h4><b>Soyad </b> - <?php echo $row['surname']; ?></h4></a>
			<a href="#" class="list-group-item  "><h4><b>Qeydiyyatda olduğu ünvan</b>  - <?php echo $row['address']; ?></h4></a>
			<a href="#" class="list-group-item  "><h4><b>Yaş </b> - <?php echo $row['age']; ?></h4></a>
			<a href="#" class="list-group-item  "><h4><b>Sinif </b> - <?php echo $row['sinif_id']; ?></h4></a>
			<a href="#" class="list-group-item  "><h4><b>Ata adı</b>  - <?php echo $row['ata_adi']; ?></h4></a>
			<a href="#" class="list-group-item  "><h4><b>Anadan olduğu şəhər </b> - <?php echo $row['sheher']; ?></h4></a>
			<a href="#" class="list-group-item  "><h4><b>Şəkil</b>  - <?php echo $row['sekil']; ?></p>
			<a href="#" class="list-group-item  "><h4><b>Şəxsiyyət vəsiqəsinin nömrəsi </b> - <?php echo $row['vesiqe_no']; ?></h4></a>
			<a href="#" class="list-group-item  "><h4><b>Telefon nömrəsi </b> - <?php echo $row['tel_no']; ?></h4></a>
			<a href="#" class="list-group-item  "><h4><b>Valideyn nəzarət kodu </b> - <?php echo $row['code']; ?></h4></a>
		</div>
	</div>
	<form method="post">
		  <input class="btn btn-danger create pull-right" name="back" type="submit" value="Back" >
	</form>
</body>
</html>
<?php

if(isset($_POST["back"])) {
  
  header("Location:qeydiyyatShow.php");
}

?>