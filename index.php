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
include '../Controller/produitc.php';

$sql="SELECT * FROM produit ";
$sqlc="SELECT * FROM categories ";
$sqlr="SELECT * FROM reclamation ";
$produitc=new produitC();
$prod=$produitc->afficherproduit($sql);
$catc=new produitC();
$categ=$catc->afficherproduit($sqlc);
$recc=new produitC();
$reee=$recc->afficherproduit($sqlr);
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
              <i class="material-icons opacity-10">stock</i>
            </div>
          <span class="nav-link-text ms-1">stock</span>
</a>
    <ul class="treeview-menu">
            <li><a href="astock.php"><i class="fa fa-circle-o"></i> Ajouter produit</a></li>
           <li><a href="acat.php"><i class="fa fa-circle-o"></i> Ajouter Categorie</a></li>

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
      <h1><a href="http://localhost/site/b/view/fr/home.php">Home</a></h1>
      <form method="POST" action="stat.php">
                                        
                    <button type="submit"  id="statistique"  class="btn btn-info" href="stat.php"> statistique</button>
                    
                    
                                        </form>
  <h1>Liste Produit</h1>

      <table  > 
 
  <th>id_cat</th>
  <th>nom_prod</th>
  <th>prix</th>
  <th>quantiter</th>
<th>image</th>
  <th>desc</th>
   <th>Avis</th>
  <th>nombre de per</th>
    <th>Moyenne</th>
      <th>Afficher</th>
  <th>Supprimer</th>
  <th>Modifier</th>
    <th>l'affichage</th>
<tr>
<?php
foreach($prod as $pro){

?>

<td> <?php echo $pro['id_cat'] ?> </td>
<td> <?php echo $pro['Nom_produit'] ?> </td>
<td> <?php echo $pro['prix'] ?>dt </td>
<td> <?php echo $pro['Quantite'] ?> </td>
<td><?php echo"<img src='./uploads/".$pro['image']."'>" ?>
      <style>
            img{
            width: 90px;
                        height: 90px;         
            }
            
            </style>
</td>
<td> <?php echo $pro['descreption'] ?> </td>
<td> <?php echo $pro['avis'] ?> </td>
<td> <?php echo $pro['nbrper'] ?> </td>
<td> <?php 
       if($pro['nbrper'] ==0)
       {
        echo 0;
       }
       else{


echo ($pro['avis']/($pro['nbrper'])); } ?> </td>
<td> <?php echo $pro['affich'] ?> </td>
<td> 
<form method="post" action="supprumer.php">
<input type="submit" value="Supprimer">
<input type="hidden" value="<?php echo $pro['id_produit'] ?>" name="id_produi">
</form></td>
<td> 
<form method="GET" action="Modifier.php">
<input type="submit" value="Modifier">
<input type="hidden" value="<?php echo $pro['id_produit'] ?>" name="id_produi">
</form></td>
<td> 
<form method="GET" action="aff.php">
<input type="submit" value="Afficher">
<input type="hidden" value="<?php echo $pro['id_produit'] ?>" name="id_produi">
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
  <h1>Liste Categorie</h1>

      <table  > 
 
  <th>nom_cat</th>
  <th>Supprimer</th>
  <th>Modifier</th>
<tr>
<?php
foreach($categ as $caa){
?>

<td><?php echo $caa['nom_cat'] ?></td>
<td> 
<form method="post" action="supprcat.php">
<input type="submit" value="Supprimer">
<input type="hidden" value="<?php echo $caa['id_categ'] ?>" name="cat">
</form></td>
<td> 
<form method="GET" action="modifcat.php">
<input type="submit" value="Modifier">
<input type="hidden" value="<?php echo $caa['id_categ'] ?>" name="catt">
</form></td>
</tr>
<?php
} 
?>
</table> 
  <br>
<table  > 
   <h1>Les reclamation</h1>
  <th>Reclamation</th>
    <th>Mail</th>
      <th>Repondre</th>
  <th>Supprimer</th>

<tr>
<?php
 foreach($reee as $raa){
?>

<td><?php echo $raa['reclamation'] ?></td>
<td><?php echo $raa['mail'] ?></td>
<td> 
<form method="post" action="reprec.php">
<input type="submit" value="Repondre">
<input type="hidden" value="<?php echo $raa['id_rec'] ?>" name="id_rec">
</form></td>
<td> 
<form method="post" action="supprrec.php">
<input type="submit" value="Supprimer">
<input type="hidden" value="<?php echo $raa['id_rec'] ?>" name="id_rec">
</form></td>

</tr>
<?php
 } 
?>
</table> 
<button class="btn btn-primary" onclick="print('index.php')">Imprimer le PDF</button>
</div>
<script>
   function print(pdf)
       {
                    // Créer un IFrame.
        var iframe = document.createElement('iframe');  
        // Cacher le IFrame.    
        iframe.style.visibility = "hidden"; 
        // Définir la source.    
        iframe.src = pdf;        
        // Ajouter le IFrame sur la page Web.    
        document.body.appendChild(iframe);  
        iframe.contentWindow.focus();       
        iframe.contentWindow.print(); // Imprimer.
             }
</script> 
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