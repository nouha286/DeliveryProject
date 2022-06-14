<?php  ?>

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
                  <img src="views/img/img.svg" style="max-width:300px ;" alt="">
    </div>
   <div class="row  mt-5">
  


    <div class="card col-sm-10 col-md-10 col-lg-6 shadow-lg p-3 mb-5 bg-body rounded"  >
          <div class="card-body " >

          <form data-parsley-validate action="Tunnel"  method="POST">
          <div class="mb-3">
                        
          <input required name="nom"	 required  type="text" class="form-control" pattern="/^[a-zA-Z ]+$/" data-parsley-trigger="change" placeholder="Nom" data-parsley-error-message="Le nom ne doit pas contenir des chiffres ou caractéres spéciaux " data-parsley-required="true" data-parsley-length="[4, 20]" id="exampleInputEmail6" >
              </div>

              <div class="mb-3">
                        <input type="text" required name="n_bus" class="form-control"  pattern="/^[a-zA-Z ]+$/" 	 data-parsley-required="true" data-parsley-trigger="change" placeholder="Nom du business"  >
                        
              </div>


              <div class="mb-3">
                       
                       <select name="T"  class="form-select" aria-label="Default select example">
                          <option selected value="E-commerce">E-commerce</option>
                          <option value="Auto-entrepreneur">Auto-entrepreneur</option>
                          <option value="Moyenne entreprise SARL">Moyenne entreprise SARL</option>
                        </select>
                        
              </div>

              <div class="mb-3">
                       
                        <input  required data-parsley-required="true" name="Tel"  pattern="^\s*(?:\+?(\d{1,3}))?[-. (]*(\d{3})[-. )]*(\d{3})[-. ]*(\d{4})(?: *x(\d+))?\s*$" data-parsley-trigger="change"  type="text" placeholder="Numéro de téléphone du business" class="form-control" >
                        
              </div>
              <div class="mb-3">
                        <input type="text" name="Ville"  required data-parsley-required="true" class="form-control"  data-parsley-trigger="change" pattern="/^[a-zA-Z]+(?:(?:\\s+|-)[a-zA-Z]+)*$/"	 placeholder="Ville" id="exampleInputEmail0" >
                        
              </div>
              <div class="mb-3">
                        <input type="text" name="Adresse" class="form-control" placeholder="Adresse"  required data-parsley-required="true"  data-parsley-trigger="change" >
                        
              </div>
              

              <div class="mb-3">
                   
                        <input type="email" name="Email" data-parsley-trigger="change"  required data-parsley-required="true" data-parsley-type="email" placeholder="Adresse Email" class="form-control"  aria-describedby="emailHelp">
                        
              </div>



           
                      <div class="mb-3">
                       
                        <input type="password" name="Password" pattern="((?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%]).{6,15})" data-parsley-error-message="le mot de passe doit contenir des caractères majuscules , miniscule , des chiffres et des caractères spéciaux!"  required data-parsley-required="true"  data-parsley-trigger="change" class="form-control" placeholder="Password" id="password">
                      </div>

                      <div class="mb-3">
                        <input type="password" data-parsley-trigger="change"  data-parsley-equalto="#password"  required data-parsley-required="true" placeholder="Confirmation Password" class="form-control" id="exampleInputPassword1">
                      </div>

                      <button type="submit" name="saveInscriptionClient" class="btn btn-primary">S'inscrire</button>
            </form>
          </div>
          <div class="text-center">
          Vous avez déja un compte? <a href="connexion_client" style="color:red; text-decoration:none;">Se connecter</a>
          </div>
    </div> 

    <div class="n  col-sm-6">
     <img  src="views/img/client.svg"  alt="">
   </div>
   </div>

   
         
</section>



</body>
</html>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"></script>
<script type="text/javascript" src="parsly_fr.js"></script>