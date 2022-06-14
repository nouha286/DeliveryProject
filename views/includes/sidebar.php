<?php session_start(); ?>
<div class="sticky-top" style="background-color: white;">
<nav class="navbar  navbar-light  "  >
  <div class="container-fluid"  >
    <img src="views/img/logo-rm.png" style="max-width:70px;" alt="">
    <span style="color: grey;" class="session">Bonjour <?php echo $_SESSION['nom'];?></span>
    <span style="color: grey;" class="d-sm-none d-sm-block  d-none d-md-block">+212628578248</span>
    
    <span style="color: grey;" class="d-sm-none d-sm-block d-none d-md-block">deliveryalami2020@gmail.com</span>

    <a class="btn client btn-nav btn-lg" style="text-decoration:none; color:white; background-color: #9573D4; " href="connexion_client">espace client</a> 
    <a class="btn admin btn-nav btn-lg" style="text-decoration:none; color:white; background-color: #9573D4; " href="connexion_admin">espace admin</a> 

    
    <button class="navbar-toggler" type="button" style="background-color: #e6e6e6 ;" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
      <span class="navbar-toggler-icon"></span>
    </button>
    
          
    <div class="offcanvas  text-center offcanvas-start rounded" style="background-color:#CCCCFF; max-width: 250px ;" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header text-center" style="margin-left:50px ;">
            <img src="logo-rm.png"  style="max-width:100px;" alt="">
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
  
        <div class="offcanvas-body" >
          <div class="dropdown mt-3" >
              
          <ul class="navbar-nav  w-100  flex-grow-1 pe-3 btn-group d-flex flex-column"  role="group" aria-label="Basic radio toggle button group">

                  
                  <li class="nav-item btn btn-outline-light mb-2 rounded justify-content-center " style ="display: flex;" >
                    <a class="nav-link "  href="acceuil"style="  COLOR: #0C2340; FONT-SIZE: unset; FONT-WEIGHT: bold; font-family: monospace;">
                    <i class="fa  fa-3x fa-home" aria-hidden="true" ></i><p class="fs-4"  >Acceuil</p> </a>
                  </li>
                  
                  <li class="nav-item btn btn-outline-light mb-2 rounded"  style ="display: flex;">
                    <a class="nav-link"  href="connexion_client" style="  COLOR: #0C2340; FONT-SIZE: unset;FONT-WEIGHT: bold; font-family: monospace;">
                    <i class="fa fa-male  fa-3x" aria-hidden="true" ></i><p class="fs-4"   >Espace client </p></a>
                  </li>
                  <li class="nav-item btn btn-outline-light mb-2 rounded " style ="display: flex;">
                    <a class="nav-link "  href="connexion_admin"style="  COLOR: #0C2340; FONT-SIZE: unset; FONT-WEIGHT: bold; font-family: monospace;">
                    <i class="fa fa-3x fa-shield" aria-hidden="true" ></i><p class="fs-4"  >Espace admin</p> </a>
                  </li>
                  <li class="nav-item btn btn-outline-light mb-2 rounded " style ="display: flex;" >
                    <a class="nav-link "  href="A_propos_de_nous"style="  COLOR: #0C2340; FONT-SIZE: unset; FONT-WEIGHT: bold; font-family: monospace;">
                    <i class="fa  fa-3x fa-info-circle" aria-hidden="true" ></i><p class="fs-4"  >A propos de Nous</p> </a>
                  </li>
                 
         
                 
                </ul>
          </div>
      
       </div>
    </div>
 </div>



</nav>

</div>