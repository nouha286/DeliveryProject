<?php 
$auto=new AdministrateurController();
$auto->autorisation();
$auto->separationAdmin();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   

    <title>Document</title>
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
 
 .admin 
 {
     display: none;
 }
 .parsley-errors-list
  {
    color: red;
  }  
 
</style>
<body style="overflow-x:hidden;">


    <section class="callout ms-2 shadow-lg bg-body rounded col-8 col-md-8">
    
    <div class="card mt-5  shadow-lg p-3 mb-5 bg-body rounded"  >
    <div class="card-body  " >
          <form data-parsley-validate action="Tunnel" method="POST" >
          <div class="mb-3">
                        
                        <input data-parsley-trigger="change" required	data-parsley-required="true" name="Adresse" value="<?php $info=$auto->edit_info_ramassage(); echo $info['Adresse']; ?>" minlength="3"	data-parsley-minlength="3"	 type="text" class="form-control" placeholder="Adresse du vendeur" >
                        
              </div>

         
              <div class="mb-3">
                   
                        <input data-parsley-trigger="change" type="text" pattern="/^[a-zA-Z ]{3,20}$/" data-parsley-pattern="/^[a-zA-Z ]{3,20}$/" required name="Ville" value="<?php  echo $info['Ville']; ?>"	data-parsley-required="true"   placeholder="Adresse du vendeur" class="form-control" >
                        
              </div>

                <div class="input-group mb-3">
                
                <input data-parsley-trigger="change" pattern="^\s*(?:\+?(\d{1,3}))?[-. (]*(\d{3})[-. )]*(\d{3})[-. ]*(\d{4})(?: *x(\d+))?\s*$" type="text" required	data-parsley-required="true" name="Tel"  value="<?php echo $info['Numero']; ?>" class="form-control " placeholder="Numéro de Telephone du vendeur" ></input>
                </div>
                <div class="text-end">
                <button type="submit" name="saveEditRammassage" class="btn  btn-primary">Modifier</button>
                </div>
                      
            </form>
          </div>

        </div>
    </section>
</div>

</body>
</html>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"></script>
<script type="text/javascript" src="parsly_fr.js"></script>
