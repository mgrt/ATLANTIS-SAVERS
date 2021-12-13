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
include '../Controller/utic.php';

$off=new usec();
$liste=$off->afficheruti();


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

<body class="g-sidenav-show  bg-gray-200" >
  <div class="row">
    <div class="col-md-3">
      <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="" >
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
              <i class="material-icons opacity-10">Offre</i>
            </div>
          <span class="nav-link-text ms-1">Offre</span>
</a>
    <ul class="treeview-menu">
          

          </ul>
        </li>
        
           </a>
         </li>
       </ul>
     </div>
   </aside>
    </div>
    <div class="col-md-9">
      <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
  <h1>Liste utilisateur</h1>

      <table  > 
  <th>id_uti</th>
  <th>nom</th>
  <th> prenom</th>
  <th>mail</th>
  <th>tel</th>
  <th>role</th>
  <th>mdp</th>
  <th>Supprimer</th>
  <th>Modifier</th>
<tr>
<?php
foreach($liste as $of){

?>
<td> <?php echo $of['id_utlisitarur'] ?> </td>
<td> <?php echo $of['nom'] ?> </td>
<td> <?php echo $of['prenom'] ?> </td>
<td> <?php echo $of['mail'] ?> </td>
<td> <?php echo $of['tel'] ?> </td>
<td> <?php echo $of['role'] ?> </td>
<td> <?php echo $of['mdp'] ?> </td>



<td> 
<form method="post" action="suprime.php">
<input type="submit" value="Supprimer">
<input type="hidden" value="<?php echo $of['id_utlisitarur'] ?>" name="id_utlisitarur">
</form></td>
<td> 
<form method="GET" action="Modifieroff.php">
<input type="submit" value="Modifier">
<input type="hidden" value="<?php echo $of['id_utlisitarur'] ?>" name="id_utlisitarur">
</form></td>
</tr>
<?php
} 
?>
</table> 
    
    </section>
</div>


  

</br>
</br>
 
      <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
 
    
    </section>
</div>

    </div>

  </div>

<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>


 
 
</body>

</html>