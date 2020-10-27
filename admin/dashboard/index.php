<?php



$fp = fopen ("path.php", "r");
$path = fgets ($fp, 255);
fclose ($fp);


if(session_id() == '') {
	session_start();
  }

$_SESSION['path']=$path;

?> 
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Etablissements de formation</title>
  
  <?php
	 $base_css=$path.'page/base_css.php';
	 include($base_css);
	 
	?> 
  
</head>
<body>
  <div class="container-scroller ">
    <!-- partial:partials/_navbar.html -->
    <?php
	
	$top_bar=$path.'page/top_bar.php';
	include($top_bar);

	?> 

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->

      <?php
		 $menu=$path.'page/menu.php';
		 include($menu);
		
	?> 
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          
         
                    
                <?php
                
                $documents=$path.'page/marque.php';
                include($documents);

                ?> 
                
       



                <div class="row">

<div class="col-md-12 stretch-card">
    <div class="card">
      <div class="card-body ">
        <h4 class="card-title  ">Administration</h4>
<hr class="border-warning mt-1">

<div class="row">


       
<div class="col-xl-3 col-lg-3  p-2  text-primary border align-items-center text-center ">


<a href="Users/index.php"><img src="images/log.png" width="50%" class='mb-2'><h6>Administration des Utilisateurs ... </a></h6> 

  
</div>

<div class="col-xl-3 col-lg-3  p-2  text-primary border align-items-center text-center ">


<a href="Evenement/index.php"><img src="images/evenement.png" width="45%" class='mb-2' ><h6>Evènements ...Autres </a></h6> 


</div>




<div class="col-xl-3 col-lg-3  p-2  text-primary border align-items-center text-center ">


<a href="contact/index.php"><img src="images/contact.png" class='mb-2' width="45%"  ><h6>Contacts</a></h6> 


</div>



<div class="col-xl-3 col-lg-3  p-2  text-primary border align-items-center text-center ">


<a href="News/index.php"><img src="images/News.png" width="95%" class='mb-2' ><br><br><h6>Administration des News </a></h6> 


</div>

<div class="col-xl-3 col-lg-3 p-2  text-primary border align-items-center text-center ">

    
  <a href="cour_document/index.php"><img src="images/pdf.png" class='mb-2' width="55%" height="65%" ><h6>Cours (Document)</a></h6> 


</div>

<div class="col-xl-3 col-lg-3 p-2  text-primary border align-items-center text-center ">

    
  <a href="cour_video/index.php"><img src="images/video.png" class='mb-2' width="65%" height="75%" ><h6>Cours (Video)</a></h6> 


</div>










</div>


</div>

</div>

</div>

</div>

<div class="row">

          <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title mb-0">Nos Etablissements</p>
                  <hr class="border-warning mt-1" >

                  <div class="row">
                  <div  class='p-3 m-4 col-xl-5 col-lg-5 card shadow border border-left-primary text-left mb-4 '>
                         <br> <a href="institut/"><h5 ><b>Institut de Formation en Gestion  <br><br>  17 , rue Yahia el Mazouni Val d’Hydra – Alger</b></h5></a> <br>
                  </div>
              
                  <div class='p-3 m-4 col-xl-5 col-lg-5 card shadow border border-left-primary text-left mb-4'>
                      <br><a href="Etablissement/"><h5 ><b>Etablissement d’Enseignement Secondaire – <br><br> cité 350 Logts côte rouge hussein dey - Alger </b></h5></a><br>
                    </div>
              
                  <div class='p-3 m-4 col-xl-5 col-lg-5 card shadow border border-left-primary text-left mb-4'>
                        <br>   <a href="Ecole01/"><h5 ><b>	Ecole de Formation Professionnelle en Gestion  <br> <br> CEM Haroune Rachid Place du 1er Mai – Alger </b></h5></a><br>
                      </div>
              
                 <div class='p-3 m-4 col-xl-5 col-lg-5 card shadow border border-left-primary text-left mb-4'>
                        <br>   <a href="bejaia/"><h5 ><b>	Ecole de Formation Professionnelle en Gestion  BEJAIA<br> <br> Cité 164 LogtsSonatrach - Bejaia </b></h5></a><br>
                      </div>
              
                <div class='p-3 m-4 col-xl-5 col-lg-5 card shadow border border-left-primary text-left mb-4'>
                        <br>   <a href="oran/"><h5 ><b>	Ecole de Formation Professionnelle en Gestion  ORAN<br> <br> Avenue Larbi Ben Mhidi Oran </b></h5></a><br>
                      </div>
               </div>
                  
                
               
                  </div>
                </div>
                </div>


       
      
          </div>




        <?php
     	$bas_page=$path.'page/bas_page.php';
     	include($bas_page);

	  ?>
    
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  
  <?php
    $base_js=$path.'page/base_js.php';
    include($base_js);
	
	?>
</body>

</html>

