<?php $auto=new AdministrateurController();
$auto->autorisationLog(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
 <title>connexion-client</title>

</head>
<style>
 @media screen and (max-width: 1400px)
 {
     .btn-nav
     {
         display: none;
     }
     .n{
        display: none;

     }
     .d{
        text-align: center;
       
     }

    .card
    {
        margin: auto;
    }
   
 }
 .parsley-errors-list
  {
    color: red;
  }  
  .session
  {
    display: none;
  }
   
</style>

<body>



<section class="container">

<div class="row ">
                  <img src="views/img/img.svg" style="max-width:500px ;" alt="">
    </div>
   <div class="row  mt-5">
  


    <div class="card col-sm-10 col-md-10 col-lg-6 shadow-lg p-3 mb-5 bg-body rounded"  >
          <div class="card-body " >
          <form data-parsley-validate action="Tunnel" method="POST">
              <div class="mb-3">
                   
                        <input name="Email" type="email" required data-parsley-requided="true" placeholder="Adresse Email" data-parsley-trigger="change" class="form-control" id="exampleInputEmail2" >
                        
              </div>

                      <div class="mb-3">
                       
                        <input name="Password" type="password" required data-parsley-requided="true" class="form-control"  placeholder="Password" id="exampleInputPassword1">
                      </div>

                      <?php  if(isset($_SESSION['errorClient'])){ $alert=new AdministrateurController();
                      $alert->AffichErrorClient();}
                      ?>

                      <button name="login" type="submit" class="btn btn-primary">Se connecter</button>
            </form>
          </div>
          <div class="text-center">
          Nouveau sur notre plateforme ?<a href="inscription_client" style="color:red; text-decoration:none;">Créer un compte</a>
          </div>
    </div> 

    <div class="n col-sm-6 ">
     <img src="views/img/client.svg"  alt="">
   </div>
   </div>

   
         
</section>


</body>
</html>
