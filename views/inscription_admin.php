<?php


$alert=new AdministrateurController();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"></script>  
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

<div class="row">
                  <img src="views/img/admin2.svg" style="max-width:300px ;" alt="">
    </div>
   <div class="row  mt-5">
  


    <div class="card col-sm-10 col-md-10 col-lg-6 shadow-lg p-3 mb-5 bg-body rounded"  >
          <div class="card-body " >
          <form method="POST" action="Tunnel" data-parsley-validate>
          <div class="mb-3">
                        
                        <input type="text" name="nom"  data-parsley-trigger="change" required data-parsley-requided="true" class="form-control" data-parsley-length="[4, 20]"  pattern="/^[a-zA-Z ]+$/" data-parsley-error-message="Le nom ne doit pas contenir des chiffres ou caractéres spéciaux "  placeholder="Nom" >
                        
              </div>

         
              <div class="mb-3">
                   
                        <input type="email" name="Email" data-parsley-trigger="change" required data-parsley-requided="true" placeholder="Adresse Email" class="form-control" id="email" aria-describedby="emailHelp">
                        
              </div>

              <div class="mb-3">
                   
                        <input type="email" data-parsley-trigger="change" required data-parsley-requided="true" placeholder="Confirmez l'adresse Email" class="form-control" data-parsley-equalto="#email"  aria-describedby="emailHelp">
                        
              </div>


           
                      <div class="mb-3">
                       
                        <input name="Password" type="password" data-parsley-trigger="change" class="form-control" pattern="((?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%]).{6,15})" data-parsley-error-message="le mot de passe doit contenir des caractères majuscules , miniscule , des chiffres et des caractères spéciaux!" required data-parsley-requided="true" placeholder="Password" id="exampleInputPassword1">
                      </div>

                      <div class="mb-3">
                        <input type="password" data-parsley-trigger="change"   placeholder="Confirmation Password" required data-parsley-requided="true" class="form-control" data-parsley-equalto="#exampleInputPassword1">
                      </div>

                      
                      <div class="mb-3">
                        <input type="password" name="identif" data-parsley-trigger="change" placeholder="Identifient admin" required data-parsley-requided="true" class="form-control"  >
                      </div>
                        <div><?php if(isset($_SESSION['error'])){$alert->AffichError(); } ?> </div>
                      <button type="submit" name="saveInscriptionAdmin" class="btn btn-primary">S'inscrire</button>
            </form>
          </div>
          <div class="text-center">
          Vous avez déja un compte? <a href="connexion_admin" style="color:red; text-decoration:none;">Se connecter</a>
          </div>
    </div> 

    <div class="n col-sm-6">
     <img src="views/img/admin1.svg"  alt="">
   </div>
   </div>

   
         
</section>



</body>
</html>
<script type="text/javascript" src="./js/parsly_fr.js"></script>