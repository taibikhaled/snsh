<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-brand-wrapper d-flex justify-content-center">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">  
         <div class="col-lg-12 ml-1 mt-2 text-light text-center"> 
         
          <h6> <b> مؤسسات التعليم و التكوين </b> </h6>
          <h6> <b> النقابة الوطنية سوناطراك </b> </h6>


          </div>
        </div>  
      </div>
      <div class="navbar-menu-wrapper  d-flex align-items-center justify-content-end">
        <ul class="navbar-nav mr-lg-4 w-100">
         
          <li class="nav-item nav-search d-none d-lg-block w-100">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="search">
                  <i class="mdi mdi-magnify"></i>
                </span>
              </div>
              <input type="text" class="form-control" placeholder="Recherche" aria-label="search" aria-describedby="search">
            </div>
          </li>

          
          
        </ul>



        <ul class="navbar-nav navbar-nav-right">


        <?php

                  
if (isset($_COOKIE["id_user"])) {

  $aler='alerts.php';
  include($aler);

  $mgs='messages.php';
  include($mgs);

  echo '<div class="topbar-divider d-none d-sm-block"></div> ';

  $user_info='user_info.php';
  include($user_info);
  
} else 


echo " 



<li class=' nav-item dropdown no-arrow mx-1'>
<a class='h5 bg bg-white text-primary border  ' href='".$path."app/Espace_membre/index.php'   role='button'  >

<i class='fas fa fa-user fa-fw'></i><small>Connexion</small>


</a></li>
";

?> 


        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
