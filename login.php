<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="education/img/favicon.png">

    <title>Login</title>    
    <link href="education/css/bootstrap.min.css" rel="stylesheet">
    <link href="education/css/bootstrap-theme.css" rel="stylesheet">
    <link href="education/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="education/css/font-awesome.css" rel="stylesheet" />
    <link href="education/css/style.css" rel="stylesheet">
    <link href="education/css/style-responsive.css" rel="stylesheet" />
</head>

<body>


       <body class="login-img3-body">

    <div class="container">      
      <?php 
          include "config.php";
              if (isset($_POST['username']) && isset($_POST['password'])) {
                $username = $_POST['username'];
                $password = md5($_POST['password']);
                $stmt =$db-> prepare("SELECT * FROM login WHERE username=? AND password=? ");
                $stmt ->bindParam(1,$username);
                $stmt ->bindParam(2,$password);
                $stmt->execute();
                $row=$stmt ->fetch();
                $user = $row['username'];
                $pass = $row['password'];
                $id = $row['id'];
                $type =$row['type'];
                if ($username==$user && $pass==$password) {
                  session_start();
                  $_SESSION['username'] = $user;
                  $_SESSION['password'] = $pass;
                  $_SESSION['id'] = $id;
                  $_SESSION['type'] = $type;
                  ?>
                  <script>window.location.href='index.php'</script>
    
                  <?php
                }else{
                  ?>
                  <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times</span>                      
                    </button>
                    <strong>Yanlış istifadəçi adı vəya parol !</strong>Zəhmət olmasa yenidən cəhd edin

                  </div>
                  <?php
                }
              }
           ?>


      <form class="login-form" method="post">        
        <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <div class="input-group">
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              <input type="text" class="form-control" placeholder="İstifadəçi adı" name="username" autofocus>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" class="form-control" placeholder="Parol" name="password">
            </div>
            <label class="checkbox">
                <span class="pull-right"> <a href="#"> Parolu unutmusunuz?</a></span>
            </label>
            <button class="btn btn-primary btn-lg btn-block" type="submit">Giriş</button>
            <button class="btn btn-info btn-lg btn-block" type="submit">Qeydiyyat</button>
        </div>
      </form>

    </div>


  </body>