<?php 
// include 'config.php';
                        if (isset($_POST['insert'])) {
                          try {
                            $pdoConnect = new PDO("mysql:host=localhost;dbname=tehsil","root","");
                          } catch (PDOException$exc){
                            echo $exc->getMessage();
                            exit();
                          }
                          $name =$_POST['name'];
                          $surname =$_POST['surname'];
                          $address =$_POST['address'];
                          $age =$_POST['age'];
                          $sinif_id =$_POST['sinif_id'];
                          $ata_adi =$_POST['ata_adi'];
                          $sheher =$_POST['sheher'];
                          $sekil =$_POST['sekil'];
                          $vesiqe_no =$_POST['vesiqe_no'];
                          $tel_no =$_POST['tel_no'];
                          $code =$_POST['code'];

                          $pdoQuery ="INSERT INTO `sagird`( `name`, `surname`, `address`, `age`, `sinif_id`, `ata_adi`, `sheher`, `sekil`, `vesiqe_no`, `tel_no`, `code`) VALUES ( :name, :surname, :address, :age, :sinif_id, :ata_adi, :sheher, :sekil, :vesiqe_no, :tel_no, :code)";

                          $pdoResult = $pdoConnect->prepare($pdoQuery);
                          $pdoExec = $pdoResult->execute(array(":name"=>$name,":surname"=>$surname,":address"=>$address,":age"=>$age,":sinif_id"=>$sinif_id,":ata_adi"=>$ata_adi,":sheher"=>$sheher,":sekil"=>$sekil,":vesiqe_no"=>$vesiqe_no,":tel_no"=>$tel_no,":code"=>$code));

                          if ($pdoExec) {
                         echo "data elave olundu";
                          }else{
                            echo "elave olunmadi";
                          }
                        }

                     ?>

                     <!DOCTYPE html>
                     <html>
                     <head>
                       <title></title>
                     </head>
                     <body>
                     <div class="panel-heading text-center" ><h4 >Tələbə qeydiyyatı</h4></div>
                              <form method="post" action="mesel.php">
                                <input type="text" name="name" required placeholder="ad"><br><br>
                                  <input type="text" name="surname" required placeholder="soyad"><br><br>
                                  <input type="text" name="address"  required placeholder="address"><br><br>
                                  <input type="number" name="age" required placeholder="yas"><br><br>
                                  <input type="number" name="sinif_id" min="1" max="11"  required placeholder="sinif"><br><br>
                                  <input type="text" name="ata_adi" required placeholder="ata adi"><br>
                                   <input type="text" name="sheher"  required placeholder="seher"><br>

                                   <input type="file" name="sekil">
                                    <input type="number" name="vesiqe_no" min="10" max="10000000" required placeholder="vesiqe nomresi"><br>
                                     <input type="number" name="tel_no" min="10" max="1000000000" required placeholder="telefon nomresi"><br>
                                      <input type="number" name="code" min="10" max="100000000" required placeholder="xususi kod"><br>
                                      <input type="submit" name="insert"  value="insert">
                              </form>
                     </body>
                     </html>