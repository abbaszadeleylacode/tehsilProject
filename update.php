<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

<div class="container-fluid text-center">
  <h3 ><b>Istifadəçinin məlumatlarını dəyiş<b></h3>
 </div>
  <div class="container">
 
      <div class="container-fluid">
<form method="post" action="index.php">
                                <input type="text" class="form-control input-lg" name="name" required placeholder="Şagirdin adı">
                                  <input type="text" class="form-control input-lg" name="surname" required placeholder="Şagirdin soyadı">
                                  <input type="text" class="form-control input-lg" name="address"  required placeholder="Qeydiyyatda olduğu ünvan">
                                  <input type="number" class="form-control input-lg" name="age" required placeholder="Yaşı">
                                  <input type="text" class="form-control input-lg" name="sinif_id" min="1" max="11"  required placeholder="Oxuduğu sinif">
                                  <input type="text" class="form-control input-lg" name="ata_adi" required placeholder="Atasının adı">
                                   <input type="text" class="form-control input-lg" name="sheher"  required placeholder="Doğulduğu şəhər">
                                   <input type="file" class="form-control input-lg" name="sekil" required placeholder="Şagirdin şəkli">
                                    <input type="number" class="form-control input-lg" name="vesiqe_no" required placeholder="Şəxsiyyət vəsiqəsi nömrəsi">
                                     <input type="number" class="form-control input-lg" name="tel_no" min="10" max="1000000000" required placeholder="Telefon nömrəsi(valideyn)">
                                      <input type="number" class="form-control input-lg" name="code" min="10" max="100000000" required placeholder="Valideyn üçün giriş kod">
                                      <input type="submit" class="btn btn-success" name="update"  value="Yenilə">
                              </form>

  <form method="post">
  	<input class="btn btn-danger create pull-right" name="back" type="submit" value="Back" >
  </form>

      </div>
    
</div>

<?php 

include "showDb.php";

if (isset($_POST['update'])) {
	$new_name = $_POST['name'];
	$new_surname = $_POST['surname'];
	$new_address = $_POST['address'];
	$new_age = $_POST['age'];
	$new_sinif_id = $_POST['sinif_id'];
	$new_ata_adi = $_POST['ata_adi'];
	$new_sheher = $_POST['sheher'];
	$new_sekil = $_POST['sekil'];
	$new_vesiqe_no = $_POST['vesiqe_no'];
	$new_tel_no = $_POST['tel_no'];
	$new_code = $_POST['code'];
    $id=$_GET['id'];
	$sql = "UPDATE `sagird` SET `name`=':new_name',`surname`=':new_surname',`address`=':new_address',`age`=':new_age',`sinif_id`=':new_sinif_id',`ata_adi`=':new_ata_adi',`sheher`=':new_sheher',`sekil`=':new_sekil',`vesiqe_no`=':new_vesiqe_no',`tel_no`=':new_tel_no',`code`=':new_code' WHERE id = '$id' ";
	
	$query = mysqli_query($db_connection,$sql);
	if ($query) {
		header("Location:qeydiyyatShow.php");
	}else {
		echo "error";
	}
}

?>
</body>
</html>
<?php

if(isset($_POST["back"])) {
  
  header("Location:qeydiyyatShow.php");
}

?>