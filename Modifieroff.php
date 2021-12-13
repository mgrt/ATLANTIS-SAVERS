<!--
=========================================================
* Material Dashboard 2 - v3.0.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2021 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<?php 
include_once '../config.php';
$db=config::getConnexion();
$sql="SELECT * FROM utilisateurs where id_utlisitarur=?";
$recipesStatement = $db->prepare($sql);
$recipesStatement->execute([$_GET['id_utlisitarur']]);
$title=$recipesStatement->fetchall();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    dachbord
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-200">
  <div class="row">
   <div class="col-md-3">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="index.php" >
        <img src="../assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white"> Dashboard</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white active bg-gradient-primary" href="">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">stock</i>
            </div>
            <span class="nav-link-text ms-1">stock</span>
</a>

     </div>
   </aside>
</li>
</ul>
</div>
 <div class="col-md-9">
  <form name="f1"  method="post" action="Modifier.php" >
        <center><legend><h2> Modifier
<?php
foreach ($title as $of) {

}
?>

        </h2></legend></center>
        <table id="example1" class="table table-striped">
        <tr>
          <input type="hidden" name="id"  value="<?php echo $of['id_utlisitarur'] ?>">
                  <input type="hidden" name="rol"  value="<?php echo $of['role'] ?>">
                         <input type="hidden" name="mdp"  value="<?php echo $of['mdp'] ?>">
          <th> Nom</th>
          
             <th><input type="text" name="nom" value="<?php  echo $of['nom']; ?>"/></th>
        </tr>
        <th>Prenom</th>
          <th><input type="text" name="prenom" value="<?php  echo $of['prenom']; ?>"/></th>
        </tr>
        <tr>
           <th>Mail</th>
          <th><input type="text" name="mail" value="<?php  echo $of['mail']; ?>"/></th>
        </tr>
          <tr>
            <th>tel</th>
          <th><input type="text" name="tel" value="<?php  echo $of['tel']; ?>"/></th>
       
          
        </tr>
        </table>
        <br>
        <center>
        <td><button type="submit" name="Modifier" value="Modifier" class="btn btn-danger">Modifier</button></td>
      </center>
      </form>
    </div>
  </aside>
 </div> 
</body>

</html>